<?php 
require('../config/php/config.inc.php');
require('../config/php/database.php'); 
require('../config/php/function.php'); 

$return = array(); 

if((!isset($_REQUEST['stage'])) || ($_REQUEST['stage'] == '')){
    $db->close($conn);
    die();
}

$stage = mysqli_real_escape_string($conn, $_REQUEST['stage']);

switch ($stage) {
    case 'toggle_param':
        if(
            (!isset($_REQUEST['uid'])) || 
            (!isset($_REQUEST['param_key'])) 
        ){
            $db->close($conn);
            die();
        }

        $uid = mysqli_real_escape_string($conn, $_REQUEST['uid']);
        $param_key = mysqli_real_escape_string($conn, $_REQUEST['param_key']);

        $strSQL = "SELECT * FROM dsx3_account WHERE id = '$uid'";
        $res = $db->fetch($strSQL, false, false);
        if($res){
            $curre_status = $res[$param_key];
            if(
                ($param_key == 'admin') || 
                ($param_key == 'common') || 
                ($param_key == 'staff') || 
                ($param_key == 'active')
            ){
                $next_status = 'N';
                if($curre_status == 'N'){
                    $next_status = 'Y';
                }

                $strSQL = "UPDATE dsx3_account SET $param_key = '$next_status' WHERE id = '$uid'";
                $resUpdate = $db->execute($strSQL);
                $return['status'] = 'Success';
            }
        }else{
            $return['status'] = 'Fail';
            $return['error_message'] = 'Not found';
        }

        echo json_encode($return);
        $db->close($conn);
        die();

        break;
    case 'toggle_commitee':
        if(
            (!isset($_REQUEST['uid'])) || 
            (!isset($_REQUEST['param_key'])) 
        ){
            $db->close($conn);
            die();
        }

        $uid = mysqli_real_escape_string($conn, $_REQUEST['uid']);
        $param_key = mysqli_real_escape_string($conn, $_REQUEST['param_key']);

        $strSQL = "SELECT * FROM dsx3_personnel WHERE dp_id = '$uid'";
        $res = $db->fetch($strSQL, false, false);
        if($res){
            $curre_status = $res[$param_key];
            
            $next_status = 'N';
            if($curre_status == 'N'){
                $next_status = 'Y';
            }

            $strSQL = "UPDATE dsx3_personnel SET $param_key = '$next_status' WHERE dp_id = '$uid'";
            $resUpdate = $db->execute($strSQL);
            $return['status'] = 'Success';
            
        }else{
            $return['status'] = 'Fail';
            $return['error_message'] = 'Not found';
        }

        echo json_encode($return);
        $db->close($conn);
        die();
        break ;
    case 'get_dp_info':
        if(
            (!isset($_REQUEST['udb_id']))
        ){
            $db->close($conn);
            die();
        }

        $db_id = mysqli_real_escape_string($conn, $_REQUEST['udb_id']);

        $strSQL = "SELECT * FROM dsx3_personnel WHERE dp_id = '$db_id'";
        $res = $db->fetch($strSQL, false, false);
        if($res){
            $return['status'] = 'Success';
            $return['data'] = $res;
        }else{
            $return['status'] = 'Fail';
            $return['error_message'] = 'Not found';
        }

        echo json_encode($return);
        $db->close($conn);
        die();
        break ;
    case 'save_dp_info':
        if(
            (!isset($_REQUEST['udb_fullname'])) || 
            (!isset($_REQUEST['udb_email'])) || 
            (!isset($_REQUEST['udb_position'])) || 
            (!isset($_REQUEST['udb_figure'])) || 
            (!isset($_REQUEST['udb_group'])) 
        ){
            $db->close($conn);
            die();
        }

        
        $udb_fullname = mysqli_real_escape_string($conn, $_REQUEST['udb_fullname']);
        $udb_email = mysqli_real_escape_string($conn, $_REQUEST['udb_email']);
        $udb_position = mysqli_real_escape_string($conn, $_REQUEST['udb_position']);
        $udb_figure = mysqli_real_escape_string($conn, $_REQUEST['udb_figure']);
        $udb_group = mysqli_real_escape_string($conn, $_REQUEST['udb_group']);

        $mx = 1;
        $strSQL = "SELECT MAX(dp_seq) mx FROM dsx3_personnel WHERE dp_personnel_type = '$udb_group'";
        $res = $db->fetch($strSQL, false, false);
        if($res){
            $mx = $res['mx'] + 1;
        }

        $strSQL = "INSERT INTO dsx3_personnel (`dp_fullname`, `dp_profile`, `dp_email`, `dp_position`, `dp_regdatetime`, `dp_personnel_type`, `dp_seq`) 
                   VALUES ('$udb_fullname', '$udb_figure', '$udb_email', '$udb_position', '$datetime', '$udb_group', '$mx')";
        $resInsert = $db->insert($strSQL, false);
        if($res){
            $return['status'] = 'Success';
        }else{
            $return['status'] = 'Fail';
            $return['error_message'] = 'Can not insert new record';
        }

        echo json_encode($return);
        $db->close($conn);
        die();
        break ;
    case 'update_dp_info':
        if(
            (!isset($_REQUEST['udb_id'])) || 
            (!isset($_REQUEST['udb_fullname'])) || 
            (!isset($_REQUEST['udb_email'])) || 
            (!isset($_REQUEST['udb_position'])) || 
            (!isset($_REQUEST['udb_figure'])) 
        ){
            $db->close($conn);
            die();
        }

        $db_id = mysqli_real_escape_string($conn, $_REQUEST['udb_id']);
        $udb_fullname = mysqli_real_escape_string($conn, $_REQUEST['udb_fullname']);
        $udb_email = mysqli_real_escape_string($conn, $_REQUEST['udb_email']);
        $udb_position = mysqli_real_escape_string($conn, $_REQUEST['udb_position']);
        $udb_figure = mysqli_real_escape_string($conn, $_REQUEST['udb_figure']);

        $strSQL = "SELECT * FROM dsx3_personnel WHERE dp_id = '$db_id'";
        $res = $db->fetch($strSQL, false, false);
        if($res){
            $strSQL = "UPDATE dsx3_personnel 
                       SET 
                       dp_fullname = '$udb_fullname', 
                       dp_profile = '$udb_figure',
                       dp_email = '$udb_email',
                       dp_position = '$udb_position'
                       WHERE dp_id = '$db_id'
                      ";
            $resUpdate = $db->execute($strSQL);
            
            $return['status'] = 'Success';
        }else{
            $return['status'] = 'Fail';
            $return['error_message'] = 'Not found';
        }

        echo json_encode($return);
        $db->close($conn);
        die();
        break ;
    case 'delete_dp_info':
        if(
            (!isset($_REQUEST['udb_id']))
        ){
            $db->close($conn);
            die();
        }

        $db_id = mysqli_real_escape_string($conn, $_REQUEST['udb_id']);

        $strSQL = "SELECT * FROM dsx3_personnel WHERE dp_id = '$db_id'";
        $res = $db->fetch($strSQL, false, false);
        if($res){
            $strSQL = "UPDATE dsx3_personnel SET dp_delete = 'Y' WHERE dp_id = '$db_id'";
            $resUpdate = $db->execute($strSQL);
            
            $return['status'] = 'Success';
        }else{
            $return['status'] = 'Fail';
            $return['error_message'] = 'Not found';
        }

        echo json_encode($return);
        $db->close($conn);
        die();
        break ;
    default:
        # code...
        break;
}


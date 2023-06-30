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
    case 'save_category':
        if(
            (!isset($_REQUEST['cat_name']))
        ){
            $db->close($conn);
            die();
        }

        $cat_name = mysqli_real_escape_string($conn, $_REQUEST['cat_name']);

        $strSQL = "SELECT * FROM dsx3_category WHERE cat_name = '$cat_name' ";
        $res = $db->fetch($strSQL, false, false);
        if($res){
            $return['status'] = 'Duplicate';
            echo json_encode($return);
            $db->close($conn);
            die();
        }

        $strSQL = "INSERT INTO dsx3_category (`cat_name`) VALUES ('$cat_name')";
        $resInsert = $db->insert($strSQL, false);
        if($resInsert){
            $return['status'] = 'Success';
        }else{
            $return['status'] = 'Fail';
            // $return['error_command'] = $email;
        }
        echo json_encode($return);
        $db->close($conn);
        die();
        break;
    case 'delete_category':
        if(
            (!isset($_REQUEST['cat_id'])) 
        ){
            $db->close($conn);
            die();
        }

        $cat_id = mysqli_real_escape_string($conn, $_REQUEST['cat_id']);

        $strSQL = "SELECT cat_name FROM dsx3_category WHERE cat_id = '$cat_id'";
        $res = $db->fetch($strSQL, false, false);
        if($res){
            $cat_name = $res['cat_name'];

            $strSQL = "DELETE FROM dsx3_category  WHERE cat_id = '$cat_id' AND cat_deleteable = 'Y'";
            $resUpdate = $db->execute($strSQL);

            $strSQL = "UPDATE dsx3_content SET con_category = 'ไม่ระบุหมวดหมู่' WHERE con_category = '$cat_name'";
            $resUpdate = $db->execute($strSQL);
            
            $return['status'] = 'Success';
            
        }else{
            $return['status'] = 'Fail';
            $return['error_message'] = 'Not found';
        }

        echo json_encode($return);
        $db->close($conn);
        die();
        break;
    default:
        # code...
        break;
}


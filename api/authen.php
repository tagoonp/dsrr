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
    case 'signup':
        if(
            (!isset($_REQUEST['fname'])) || 
            (!isset($_REQUEST['lname'])) || 
            (!isset($_REQUEST['password'])) || 
            (!isset($_REQUEST['email'])) 
        ){
            $db->close($conn);
            die();
        }

        $fname = mysqli_real_escape_string($conn, $_REQUEST['fname']);
        $lname = mysqli_real_escape_string($conn, $_REQUEST['lname']);
        $password = mysqli_real_escape_string($conn, $_REQUEST['password']);
        $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
        $password = base64_encode($password);

        $strSQL = "SELECT * FROM dsx3_account WHERE email = '$email' AND delete_status = 'N'";
        $res = $db->fetch($strSQL, false, false);
        if($res){
            $return['status'] = 'Duplicate';
            echo json_encode($return);
            $db->close($conn);
            die();
        }

        $fullname = $fname . ' ' . $lname;
        $strSQL = "INSERT INTO dsx3_account (`fullname`, `email`, `password`, `regdate`) VALUES ('$fullname', '$email', '$password', '$datetime')";
        $resInsert = $db->insert($strSQL, false);
        if($resInsert){
            $return['status'] = 'Success';
        }else{
            $return['status'] = 'Fail';
            $return['error_command'] = $email;
        }
        echo json_encode($return);
        $db->close($conn);
        die();
        break;
    case 'signin':
        if(
            (!isset($_REQUEST['username'])) || 
            (!isset($_REQUEST['password'])) 
        ){
            $db->close($conn);
            die();
        }

        $username = mysqli_real_escape_string($conn, $_REQUEST['username']);
        $password = mysqli_real_escape_string($conn, $_REQUEST['password']);
        $password = base64_encode($password);

        $strSQL = "SELECT * FROM dsx3_account WHERE email = '$username' AND password = '$password' AND active = 'Y' AND admin = 'Y' AND delete_status = 'N'";
        $res = $db->fetch($strSQL, false, false);
        if($res){
            $_SESSION['dsrr_uid'] = $res['id'];
            $_SESSION['dsrr_role'] = 'admin';
            $_SESSION['dsrr_id'] = session_id();
            $return['status'] = 'Success';
        }else{
            $return['status'] = 'Not found';
        }
        echo json_encode($return);
        $db->close($conn);
        die();
        break;
    default:
        # code...
        break;
}


<?php 
if((!isset($_SESSION['dsrr_uid'])) || ($_SESSION['dsrr_uid'] == '')){
    header('Location: ./signin');
    die();
}
?>
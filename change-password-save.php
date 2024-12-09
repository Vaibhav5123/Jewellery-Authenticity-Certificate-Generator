<?php

session_start();
include 'db.php';

$old_password = $_REQUEST['old_password'];
$new_password = $_REQUEST['new_password'];
$confirm_password = $_REQUEST['confirm_password'];

if ($new_password != $confirm_password || $old_password != $_SESSION['admin']['password']) {
    echo "Password does not match please check it again";
} else {

    $admin = $_SESSION['admin']['id'];
    
    $query = "update admin set `password`='$new_password' where id='$admin'";
    $result = mysqli_query($link, $query);
    if (mysqli_affected_rows($link) > 0) {
        $_SESSION['admin']['password']=$new_password;
            echo "<script>alert('change password Successfully'); window.location='user-login.php';</script>";
            
        }
        else{
            echo "<script>alert('password not change Successfully'); window.location='user-login.php';</script>";
            
        }
    }
?>
    
    
    
    
    



 
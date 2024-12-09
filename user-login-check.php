<?php

session_start();
$mobile_no = $_REQUEST['mobile_no'];
$password = $_REQUEST['password'];

$link = mysqli_connect("localhost", "root", "", "jewellery-authenticity");
$query = "select * from admin where mobile_no='$mobile_no' and password='$password' ";
$res = mysqli_query($link, $query);
if (mysqli_num_rows($res) > 0) {

    $admin = mysqli_fetch_array($res);
    $_SESSION['admin'] = $admin;

    header("location:index.php");
} else {

    echo '<script>alert("username/password incorrect, Please try again."); window.history.back();</script>';
}
?>
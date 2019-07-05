<?php
session_start();

require 'database_con.php';
$name = $_POST['user'];
$pass = $_POST['password'];

$check = " SELECT * from `user_table` where `username` = '$name' && `password` = '$pass'";
$result = mysqli_query($con, $check);
$num = mysqli_num_rows($result);

$login_time = date("F j, Y g:i a");

if($num == 1){
    $_SESSION['user'] = $name;
    $register = "UPDATE `user_table` SET `login_time` = '$login_time' where `username` = '$name'";
    mysqli_query($con, $register);
    header('location: home.php'); 
}else{
    header('location: login.php'); 
}
?>

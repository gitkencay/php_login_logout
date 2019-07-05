<?php
session_start();

header ('location: login.php'); 

require 'database_con.php';
$name = $_POST['user'];
$pass = $_POST['password'];

$check = " select * from user_table where username = '$name'";
$result = mysqli_query($con, $check);
$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username already taken! Please try again!";
}else{
    $register = "INSERT INTO `user_table`(`username`, `password`, `login_time`) VALUES ('$name','$pass','00:00')";
    mysqli_query($con, $register);
    echo "Sucessfully Registered!";
}

?>

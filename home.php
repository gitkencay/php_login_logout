<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title> Home Page </title>
</head>
<body>
<div class="contaiiner"> 
    <a class="float-right" href="logout.php"> LOGOUT </a>
    <h1> Welcome <?php echo $_SESSION['user'];?></h1>
</div> 
    
</body>
</html>
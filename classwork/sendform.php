<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

<form action="#" >
    <input type="text" name="firstname" placeholder="Enter first name">
    <input type="text" name="lastname" placeholder="Enter second name">
    <input type="email" name="email" placeholder="Enter email address">
    <input type="password" name="passw" placeholder="Enter password ">

    <button name="btn">submit</button>
</form>
    
</body>
</html>




<?php

include 'db.php';


if (!isset( $_REQUEST['btn'])){
    
$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$email = $_REQUEST['email'];
$passw = $_REQUEST['passw'];

    $insert = "INSERT INTO users(id, firstname, lastname, email, password)
    VALUES (2, $firstname , '$lastname , $email, $passw)";
    
    
    $sql = mysqli_query($conn, $insert);
    
    if($sql){
        echo ' created';
    }else{
        echo 'Error';
    }
    
    
}



?> 
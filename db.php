<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

<form action="" method="POST">
    <input type="text" name="fname" placeholder="Enter first name">
    <input type="text" name="lname" placeholder="Enter second name">
    <input type="text" name="email" placeholder="Enter email address">
    <input type="password" name="passw" placeholder="Enter password ">

    <button name="btn">submit</button>
</form>
    
</body>
</html>

<?php

include 'connection.php';



// $query = "CREATE DATABASE new_db";

// $sql = mysqli_query($conn, $query);

// if($sql){
//     echo "db created";

// }else{
//     echo "DB creation Error";
// };


$qry = "CREATE TABLE users(
id INT NOT NULL,
firstname varchar (50),
lastname varchar(50),
email varchar(50),
password varchar(20)
)";

$sql = mysqli_query($conn, $qry);

// if (isset( $_POST['btn'])){
    
//     $fname = $_POST['fname'];
//     $lname = $_POST['lname'];
//     $email = $_POST['email'];
//     $passw = $_POST['passw'];


//     $insert = "INSERT INTO users 
//     (id, 
//     firstname, 
//     lastname, 
//     email,
//      password
//      )


//     VALUES (
//     1, 
//     $fname, 
//     $lname, 
//     $email, 
//     $passw)";


// $sql = mysqli_query($conn, $insert);

//     if($sql){
//         echo 'details succesful';
//     }else{
//         echo 'Error';
//     }

// }






?>
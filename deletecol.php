<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <center>
    <form action="" method="POST">
        <input type="text" name="myid" placeholder="Enter id">
        <button name="btn">Delete</button>

    </form>
    </center>
   
</body>

<?php
    include 'connection.php'; 
    
    // include 'createPost.php';

    
    if (isset($_POST['btn'])) {
        $my_id = $_POST['myid'];


        $deleterow = "DELETE FROM users WHERE id = $my_id";

        $sql = mysqli_query($conn, $deleterow);

        if($sql){
            echo "deleted successfully ";
        }else{
            echo "error";
        }; 

    }
?>

<!-- 
DELETE FROM `users` WHERE `id` = 5  -->




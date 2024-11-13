<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>
<body>
    <center>
    <form action="" method="POST">
        <input type="text" name="user_id" placeholder="Enter user id">
        <br>
        <br>
        <input type="text" name="postbody" placeholder="Write post">
        <br>
        <br>
        <button name="btn">Create Post</button>

    </form>
    </center>

</body>
</html>

<?php

    include 'connection.php'; 

    if (isset($_POST['btn'])){
        $user_id = $_POST['user_id'];
    $postbody = $_POST['postbody'];

    $insert = "INSERT INTO post ( user_id, 	postbody) VALUES ('$user_id','$postbody')";

    $sql = mysqli_query($conn, $insert);

    if($sql){
    echo "Success";
}else{
    echo "Error";
};





    }


?>

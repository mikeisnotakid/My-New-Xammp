<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <Center>

        <form method="POST" action="">

            <input type="text" name="fname" placeholder="Enter First Name">
            <br><br>

            <input type="text" name="lname" placeholder="Enter Last Name">
            <br><br>

            <input type="email" name="email" placeholder="Enter email">
            <br><br>

            <input type="password" name="pword" placeholder="****">
            <br><br>

            <button name="btn">Sign Up</button>

        </form>

    </Center>

</body>
</html>

<?php

    include 'connection.php'; 

    if (isset($_POST['btn'])) {
 
       $fname = $_POST['fname'];
       $lname = $_POST['lname'];
       $email = $_POST['email'];
       $pword = $_POST['pword'];

       $insert = "INSERT INTO users ( first_name, last_name, email, `password`) VALUES ('$fname', '$lname', '$email','$pword')";

       
    }

    
        $sql = mysqli_query($conn, $insert);

        if($sql){
                echo 'Successfully Inserted';
            }else{
                echo "Insert error";
            }

?>
<?php
include "connection.php";

if (isset($_POST['RegBtn'])){


    $username = $_POST['username'];
    $realname = $_POST['realname'];
    $email = $_POST['email'];
    $passw = $_POST['passw'];




    $select = "SELECT * FROM mikedata WHERE Username = '$username' " ;
    
$sql = mysqli_query($conn, $select);

$num = mysqli_num_rows($sql);

if($num > 0){
  echo "Username in use";
}else{
    $insert = "INSERT INTO mikedata ( Name, Email, Username, Password) VALUES ('$realname','$email', '$username', '$passw')";

    $sql = mysqli_query($conn, $insert);

    
    echo "<script>alert('Registration succesful');</script>";

    header('Refresh: 0.5; URL=login.php');
}

}







?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    input,
    button{
      padding: 15px 10px;
    }
  </style>
</head>
<body>

  <center>
    <h2>
      SIGN UP
    </h2>
    <form action="" method="POST">

      <input type="text" name="firstname" placeholder="Firstname"><br><br>

      <input type="text" name="lastname" placeholder="Lastname"><br><br>

      <input type="text" name="email" placeholder="Email"><br><br>

      <input type="password" name="pass" placeholder="Password"><br><br>

      <button name="btn">
        SIGN UP
      </button>
    </form>
  </center>
  
</body>
</html>




<?php

  include 'connection.php';

  if(isset($_POST['btn'])){

    signup($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['pass']);

  }
  function signup($firstname, $lastname, $email, $password){
     
    global $conn;

    $select = "SELECT * FROM users WHERE email = '$email'";

    $sql = mysqli_query($conn, $select);

    $num = mysqli_num_rows($sql);

    if($num > 0){
      echo "Email and password in use";
    }

    else{

      $insert = "INSERT INTO users (first_name, last_name, email, password)
      VALUES ('$firstname', '$lastname', '$email', '$password')";

      $insert_sql = mysqli_query($conn, $insert);

      if($insert_sql){
        
        echo "Signup Success";

      }
      else{

        echo "Signup error";

      }

    }

  }







?>
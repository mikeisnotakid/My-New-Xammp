<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="POST">

    <input type="number" name="id"><br><br>

    <input type="text" name="new"><br><br>

    <input type="text" name="confirm"><br><br>

    <button name= "update">
      UPDATE
    </button>

  </form>
</body>
</html>

<?php

  include 'connection.php';

  if(isset($_POST['update'])){

    $id = $_POST['id'];

    $new = $_POST['new'];

    $confirm = $_POST['confirm'];

    if($new == $confirm){
      
      $upd = "UPDATE users
      SET password = '$confirm'
      WHERE id = $id ";

      // echo "update successful";

    }

    $sql = mysqli_query($conn, $upd);


    if($sql){
      echo 'update successful';
    }
    else{
      echo 'insert failed';
    }


  }


?>
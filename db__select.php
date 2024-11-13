<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php

    include 'connection.php';


    $qry = "SELECT * FROM users";

    $sql = mysqli_query($conn, $qry);

    if($sql){

      $num = mysqli_num_rows($sql);
      
      while($num--){

        $fetch = mysqli_fetch_assoc($sql); 
        
        echo $fetch['firstname'].'<br/>';

      }

    }
    else{
      echo "Selection error";
    }


  ?>
</body>
</html>




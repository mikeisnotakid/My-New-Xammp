<?php

include 'msconnect.php';






if (isset($_POST['loginBtn'])){
    $Email = $_POST['Email'];
    $TelNum = $_POST['TelNum'];

 
    $select = "SELECT * FROM mysocial WHERE email = '$Email' AND phone = '$TelNum' ";
    
    
    $select2 = "SELECT  name FROM mysocial ";

    $sql2 = mysqli_query($conn, $select);
    $fetch =  mysqli_fetch_assoc($sql2);
    $fetchName = $fetch['image'];


   
    
    

// $fetch = mysqli_fetch_assoc($sql2);
    $sql = mysqli_query($conn, $select);


    $num = mysqli_num_rows($sql);

    if($num > 0){
      // setcookie('ProfilePics', '$fetchName', 86400);
      // echo "Welcome $fetchName to Ms Social";

   
      echo "<script>alert('Welcome');</script>";


      

      // header('Refresh: 2; URL=msreghome.php');
      
    }else{
      echo "Details not found";
    }

}





// setcookie("email","value=$fetchName", time() + 60*60*24);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
  <img src="<?php echo "upload/$fetchName"; ?>" >  
  </div>
</body>
</html>
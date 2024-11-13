<!DOCTYPE html> 
<html> 
 <head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <title></title> 
 </head> 
 <body> 
 
 
  <center> 
     
   <form action="" method="POST"> 
      
    <input type="number" name="id" placeholder="Enter id"> <br><br> 
    <input type="password" name="new_pass" placeholder="new password"> <br><br> 
    <input type="password" name="conf_pass" placeholder="confirm password"> <br><br> 
    <input type="submit" name="btn" value="Update"> <br><br> 
   </form> 
 
 
  </center> 
 </body> 
</html> 
 
<?php   
  
 include 'connection.php'; 
  
 if (isset($_POST['btn'])) { 
  //collect user input 
  $id= $_POST['id']; 
  $new_pass= $_POST['new_pass']; 
  $conf_pass= $_POST['conf_pass']; 
 
 
  // check if passwords match 
  if ($new_pass === $conf_pass) { 
   // allow update 
 
   $qry = "UPDATE users SET password = '$new_pass' WhERE id = $id "; 
 
   $sql = mysqli_query($conn, $qry); 
 
   if($sql){ 
    echo "Password Updated successfully"; 
   }else{ 
    echo "Password Update Error!"; 
   } 
 
 
 
  }else{ 
   // display error 
   echo "<p style='color:red'> Password do not match </p>"; 
  } 
 } 
  
 
 
 
?>
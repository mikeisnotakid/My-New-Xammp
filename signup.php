<!DOCTYPE html> 
<html> 
 <head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <title></title> 
 </head> 
 <body> 
 
 
  <center> 
   <h2>User Signup</h2> 
 
   <form method="POST" action=""> 
 
    <input type="email" name="email" placeholder="your email"> 
    <br><br> 
 
    <input type="password" name="pass" placeholder="*****"> 
    <br><br> 
 
    <button name="btn">Signup</button> 
   </form> 
  </center> 
 </body> 
</html> 
 
 
<?php  
 
 //check for submission 
 if (isset($_POST['btn'])) { 
  
   // collect email and pass 
  $email = $_POST['email']; 
  $pass = $_POST['pass']; 
 
  $details = "id:".time()." email:$email password:$pass - "; 
 
 
  // store in file 
  $file = fopen('database.txt', 'a'); 
 
  fwrite($file, $details); 
 
  fclose($file); 
 
  echo "<p style='color:green'> details Stored successfully! </p>"; 
 
 }  
 
 ?>
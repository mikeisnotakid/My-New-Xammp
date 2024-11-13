<!DOCTYPE html> 
<html> 
 <head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <title></title> 
 </head> 
 <body> 
 
  <center> 
   <h2>Login</h2> 
   <form action="" method="POST"> 
     
    <input type="email" name="email" placeholder="Enter your email address"> 
    <br><br> 
 
    <input type="password" name="pass" placeholder="Enter your password"> 
    <br><br> 
 
    <button name="btn">Login</button> 
   </form> 
  </center> 
 </body> 
</html> 
 
 
<?php  
 
 
 
 if (isset($_REQUEST['mssg'])) { 
  echo "<p style='color:red'>". $_REQUEST['mssg'] ."</p>";  
 } 
 
 
 
 if(isset($_POST['btn'])){ 
  $email = $_POST['email']; 
  $pass = $_POST['pass']; 
 
 
 
  $file = fopen('database.txt', 'r'); 
 
  $details = fread($file, filesize('database.txt')); 
 
  $exp = explode(' - ', $details); 
 
 
  $result = ''; 
  for ($i=0; $i < count($exp) ; $i++) {  
    
   $email_pos = strpos($exp[$i], $email); 
   $password_pos = strpos($exp[$i], $pass); 
    
   if ($email_pos > 0 && $password_pos >0) { 
     
    // $result =  "<p style='color:green'> Login successfully! </p>"; 
    // store user details in a cookie 
 
    setcookie('email',$email, time()+84600*24); 
 
    header('Location:dashboard.php'); 
 
    break; 
 
     
   }else{ 
    $result = "<p style='color:red'> Incorrect details! </p>"; 
 
   } 
 
  } 
 
  echo $result; 
 
  fclose($file); 
 
 } 
 
 
 
 
 ?>
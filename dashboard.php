<!DOCTYPE html> 
<html> 
 <head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <title> 
    
  </title> 
 </head> 
 <body> 
 
 
  <center> 
    
   <h1>Welcome to Dashboard <?php echo $_COOKIE['email']; ?></h1> 
  </center> 
 
 
  <form action="" method="POST"> 
    
   <button name="logout">LogOut</button> 
  </form> 
 
 </body> 
</html> 
 
 
<?php  
 
  
 if (!isset($_COOKIE['email'])) { 
  header('Location:login.php?mssg=session timeout, please login'); 
 } 
 
 
 
 
 if (isset($_POST['logout'])) { 
   
  //unset cookie  
  setcookie("email", "", time() - 3600); 
 
  header('Refresh:0'); 
    
 } 
 
 
 ?> 
 
 
 
 
 <!-- logout, urlparam message -->
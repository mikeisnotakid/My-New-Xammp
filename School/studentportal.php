<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/portal.css">
  
  </head>
  <?php
include "loginLogic.php";

?>
  <body>

    <!-- Navbar  -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="images/Teewon Logo.jpg" alt="mylogo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Admissions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">News and Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="studentportal.php">Student Portal </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Study</a>
        </li>
      </ul>
      <span class="navbar-text">
      <?php    
                     if(isset($_COOKIE['ID'])){
                       echo $_COOKIE['name'];
                    }else{
                      echo "<a href='login.php'>login </a> or <a href='register.php'>register</a>";
                    }
                    ?>
      
        <!-- to show only when the user have loged in -->
        <?php 
             
             
                    if(isset($_COOKIE['ID'])){
                      // echo $_COOKIE["myimage"];
                    
      
                     
                      echo "<img src='upload/{$_COOKIE['myimage']}' alt='user profile pics'>";
                      
                      echo "<form  method='POST'>
                      <button name='LogOutBtn'>Log Out</button>
                       </form>";



                       
                   }else{
                     echo '<svg  xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
</svg>';
                   }
                   ?>
      
      </span>
    </div>
  </div>
</nav>


<!-- Profile container -->
<div class="profile-container">
<?php 
  if(isset($_COOKIE['ID'])){
    echo  "<img  class='profile-img'  src='upload/{$_COOKIE['myimage']}' alt='user profile pics'>";

    echo "<h1 class='profile-H1'>{$_COOKIE['name']}</h1>";
    echo "<p>{$_COOKIE['gender']}</p>";
    echo "<p>{$_COOKIE['name']} From {$_COOKIE['country']}</p>";



  }

   ?>


</div


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  
</html>

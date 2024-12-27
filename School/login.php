<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles/loginstyles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <?php include "loginLogic.php"; ?>
  <body>
 <!-- Navbar -->

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
          <a class="nav-link" href="#">Student Portal </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Study</a>
        </li>
      </ul>
      <span class="navbar-text">
        <a href="login.php">login </a> or <a href="register.php">register</a> 
        <!-- to show only when the user have loged in -->
        <img src="images/Teewon Logo.jpg" alt="user profile pics">
      </span>
    </div>
  </div>
</nav>

<!-- heading -->

<h1 class="text-center">Welcome to Teewon School </h1>

<p class="text-center"> <span> <a href="#Login">Login now </a></span>to get online acccess as a student of Teewon School </p>
<p class="text-center">if you don't have an account <span><a href="register.php">Register now</a></span> to enjoy online acccess</p>


<div class="container">    
  <form method="POST">
  <div class="mb-3">
  <label for="exampleFormControlInput1" id="Login" class="form-label">Email address</label>
  <input type="text" name="UsernameOREmail" class="form-control" id="exampleFormControlInput1" placeholder="Username or Email">
  </div>

  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Password</label>
  <input type="text" name="passw" class="form-control" id="exampleFormControlInput1" placeholder="**************">

  <button name="LoginBtn" type="submit" class="btn btn-primary mb-3 d-block mx-auto">Log in</button>
  </div>
  </form>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
<!-- <link rel="stylesheet" href="styles/registerstyles.css"> -->
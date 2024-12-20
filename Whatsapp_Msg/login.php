<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Styles/login.css">
</head>
<?php include "loginLogic.php"; ?>
<body>

 <div class="firstlogin-container">
    <h1>Login</h1>
    <h3>Welcome to Mike WhatsApp</h3>

    <p>Need a Mike WhatsApp Account?</p>
    <a href="register.php">create an account</a>
 </div>



    <form method="POST">
        <label>Username or Email</label>
        <input type="text" name="UsernameOREmail">
        <label>Password</label>
        <input type="text" name="passw">
        <!-- <input type="checkbox">
        <label>keep me logged in</label> -->
        <button name="LoginBtn">Log in </button>
        <p>forgot username?</p>
        <p>forgot password?</p>
        <p>can't log in?</p>
    </form>

   
    
</body>
</html>

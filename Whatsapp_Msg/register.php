<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="Styles/register.css">
</head>
<?php
include "registerLogic.php";?>


<body>
    <div class="firstlogin-container">
        <h1>Login</h1>
        <h3>Welcome Mike WhatsApp</h3>
    
        <p>Already have Mike WhatsApp?</p>
        <a href="login.html">login</a>
     </div>

    <form method="POST">
        <label>Username</label>
        <input type="text" name="username">
        <label>Email</label>
        <input type="email" name="email">
        <label>Name</label>
        <input type="text" name="realname">
        <label>Password</label>
        <input type="password" name="passw">
        <!-- <input type="checkbox">
        <label>keep me logged in</label> -->
        <button name="RegBtn">Register</button>
        <p>forgot username?</p>
        <p>forgot password?</p>
        <p>can't log in?</p>
    </form>

    



</body>
</html>
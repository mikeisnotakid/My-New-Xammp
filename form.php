<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <input type="" name="name" placeholder="Name">
        <br><br>

        <input type="email" name="mail" placeholder="Email">
        <br><br>

        <input type="password" name="pass" placeholder="****">
        <br><br>

        <button name="btn">Submit<button>

    </form>
</body>
</html>

<?php

if(isset($_REQUEST['btn'])) {
    echo $_REQUEST['name'];
    echo $_REQUEST['mail'];
    echo $_REQUEST['pass'];
}



?>
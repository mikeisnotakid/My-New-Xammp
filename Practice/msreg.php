
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php include 'msreglogic.php';?>
<body>
    <center>
        <form action="" method="POST" enctype="multipart/form-data">
    <input type="text" name="email" placeholder='Enter your email address'>
    <br>
    <input type="text" name="MName" placeholder='Enter your name'>
    <br>
    <input type="text" name="TellNumber" placeholder='Enter your phone number'>
    <br>
    <input type="file" accept="image/jpeg, image/png, image/gif" name="UploadImage" placeholder='Upload an image'>
    <br>
    <button name="Regbtn">Register</button>

    </form>
    </center>
</body>
</html>

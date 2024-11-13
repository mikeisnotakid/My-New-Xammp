<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Login</title>
</head>

<form action="" method="POST">
    <input type="email" name="Email" placeholder='Enter your Email'>
    <input type="text" name="Password" placeholder='Enter your password'>
    <button name="Btn">Login</button>

</form>
<body>
    
</body>
</html>

<?php  
 include 'MyPconnect.php';
 
 if (isset($_POST['Btn'])){

    $email = $_POST['Email'];

    $pass = $_POST['Password'];

    // $insert = "INSERT INTO users (email)
    // VALUES ('$email')";

    // $insert_sql = mysqli_query($conn, $insert);

    // if($insert_sql){
      
    //   echo "Signup Success";

    // }
    // else{

    //   echo "Signup error";

    // }


    $select = "SELECT * FROM users WHERE email = '$email' ";

    

            $sql = mysqli_query($conn, $select);

            $num = mysqli_num_rows($sql);


        if($num > 0){
            setcookie('email',$email); 
        header("Location: homepage.php"); 
        }else{
        echo 'Error in validation';
        }




 }


?>
 
 
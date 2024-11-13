<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form method="POST" action="">
        <input type="" name="name" placeholder="Name">
        <br><br>

        <input type="email" name="mail" placeholder="Email">
        <br><br>

        <br><br>

        <button name="btn">Create account <button>

    </form>
    </center>
    
</html>

<?php 





if(isset($_REQUEST['btn'])) {
    $MyName = $_REQUEST['name'];
    $MyEmail = $_REQUEST['mail'];

    if( strlen ($_REQUEST['name'] &&  $_REQUEST['mail'])  === 0){
  
        echo ' make sure both input fields is not empty ';
        // die;

    }else{
          
        echo ' input details verified ';
        
        // exit;
        $MyFile = fopen('signup.txt', 'a');
        fwrite($MyFile, ' Name:'.$MyName.'Email:'.$MyEmail."\n \n ");
        fclose($MyFile);
    };

  


   
};

?>



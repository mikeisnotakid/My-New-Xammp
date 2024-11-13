<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST" action="" enctype="multipart/form-data">
    <center>
    <input type="" name="name" placeholder="Name">
        <br><br>

    <input type="email" name="mail" placeholder="Email">
        <br><br>

    <input type="password" name="pass" placeholder="****">
        <br><br>

    <input type="file" name="passport">
        <br><br>

    <button name="btn">
        Submit
    </button>
      
    </center>


        
</form>
    
</body>
</html>

<?php


// echo time().'<br/>';

if(isset($_POST['btn'])){
    // echo $email = $_POST['mail'];
    // echo $password = $_POST['pass'];
     $passp = $_FILES['passport'];
     $myname = $_POST['name'];

    //  print_r($passp);
    $email = $_POST['mail'];
     $tmp = $passp['tmp_name'];
     $name = $passp['name'];
     $size = $passp['size'];

     

     

    // echo $extension;


   
     
     $fileType = strtolower(pathinfo($name,PATHINFO_EXTENSION) );
     $destination = "upload/".$myname.time().'.'.$fileType;

     if ($size > 500000){
        echo '<span style="color:red"> File too large </span>';
     }elseif($fileType != 'png' && $fileType != 'jpg' && $fileType != 'jpeg' && $fileType != 'gif' && $fileType != 'svg'){
    echo '<span style="color:red"> file not supported</span>';
     }else{
        if(move_uploaded_file($tmp,$destination)){
            echo "File upload Succesful";
         }else{
            echo "File upload Error";
         }; 
     }
     

   

};

?>

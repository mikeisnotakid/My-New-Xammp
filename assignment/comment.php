<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    textarea{
        height: 140px;
        width: 400px;
        display: block;
        margin: auto;
        border: 4px solid black;
        border-radius: 20px
    }
    button{
        display: block;
        margin: auto;
        height: 50px;
        width: 150px;
        }

 
    
</style>
<body>
    <form action="" >
        <textarea name="mytextarea" id="textavalue"></textarea>
        <button name="btnsend">Post</button>

     
        
       
    </form>

   
</body>
</html>



<?php



// echo $_COOKIE['email'];





if (isset($_REQUEST['btnsend'])) {
//   echo $_REQUEST['mytextarea'];

echo "   <button name='secondbtn' >Edit</button>";

$mytextarea = $_REQUEST['mytextarea'];

$mypost = "$mytextarea";

 $file = fopen('comment.txt', 'a');

 fwrite($file, $mypost);

 echo $mypost;

 fclose($file);






};


//   $secondbtn = $_REQUEST['secondbtn']; 

//   echo $secondbtn;



?> 

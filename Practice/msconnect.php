<?php

$server = 'localhost';
$user = 'root';
$password = '';
$db = 'practical_stuff';

$conn = mysqli_connect($server, $user, $password, $db);

if($conn){
  
}else{
    echo "connection error";
};



?> 
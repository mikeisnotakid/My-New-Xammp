<?php

$server = 'localhost';
$user = 'root';
$password = '';
$db = 'teewon_school';

$conn = mysqli_connect($server, $user, $password, $db);

if($conn){
    // echo "connection success";
}else{
    echo "connection error";
};



?> 
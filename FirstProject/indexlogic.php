<?php

include "connection.php";






if(isset($_POST['LoginBtn'])){
    echo "<script>alert('Loggin again');</script>";
    
    header('Refresh: 0.5; URL=login.php');

    setcookie('ID', $id, time() -3600);
 
  setcookie('name', $name, -3600);
}


 




?>



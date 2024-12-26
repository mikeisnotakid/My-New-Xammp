<?php
include "connection.php";




if (isset($_POST['LoginBtn'])){


    $UsernameOREmail = $_POST['UsernameOREmail'];
    $passw = $_POST['passw'];



    $select = "SELECT * FROM teewon_fashion_data WHERE Email = '$UsernameOREmail' OR username = '$UsernameOREmail' AND password = '$passw'";
    $sql = mysqli_query($conn, $select);


    $fetch = mysqli_fetch_assoc($sql);


    
    $num = mysqli_num_rows($sql);

    if($num > 0){
      // setcookie('ProfilePics', '$fetchName', 86400);
      // echo "Welcome $fetchName to Ms Social";

      $id = $fetch['id'];
      
      $name = $fetch['Name'];
      $emai = $fetch['Email'];
  

      echo "<script>alert('Welcome');</script>";


    //   print_r($fetch);

      header('Refresh: 0.5; URL=index.php');

      setcookie('ID', $id, time()+60*60*24);
	// setcookie('email', $Email, time()+60*60*24);
    setcookie('name', $name, time()+60*60*24);


      
    }else{
        echo "<script>alert('Details not found');</script>";
    //   echo "";
    }


}



    // echo $_COOKIE['ID'];
// echo $fetch;


?>


<?php
include "connection.php";





if (isset($_POST['LoginBtn'])){


    $UsernameOREmail = $_POST['UsernameOREmail'];
    $passw = $_POST['passw'];



    $select = "SELECT * FROM students_data WHERE Email = '$UsernameOREmail' OR username = '$UsernameOREmail' AND password = '$passw'";
    $sql = mysqli_query($conn, $select);


    $fetch = mysqli_fetch_assoc($sql);


    
    $num = mysqli_num_rows($sql);

    if($num > 0){
      // setcookie('ProfilePics', '$fetchName', 86400);
      // echo "Welcome $fetchName to Ms Social";

      $id = $fetch['id'];
      
      $name = $fetch['first_name'];
      $email = $fetch['email'];
      $myimage = $fetch['image'];
      $gender = $fetch['gender'];
      $username = $fetch['username'];
      $country = $fetch['country'];
  
  

      echo "<script>alert('Welcome');</script>";


      // print_r($fetch);

      header('Refresh: 0.1; URL=index.php');

      setcookie('ID', $id, time()+60*60*24);
	setcookie('myimage', $myimage, time()+60*60*24);
    setcookie('name', $name, time()+60*60*24);
    setcookie('gender', $gender, time()+60*60*24);
    setcookie('country', $country, time()+60*60*24);


      
    }else{
        echo "<script>alert('Details not found');</script>";

    //   echo "";
    }


}


if (isset($_POST['LogOutBtn'])){
    setcookie('ID', $id, time()-3600);
  setcookie('myimage', $myimage, time()-3600);
    setcookie('name', $name, time()-3600);
    header('Refresh: 0.01; URL=index.php');
}

    // echo $_COOKIE['ID'];
// echo $fetch;




?>


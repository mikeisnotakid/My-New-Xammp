<?php
include "connection.php";






if (isset($_POST['LoginBtn'])){


    $UsernameOREmail = $_POST['UsernameOREmail'];
    $passw = $_POST['passw'];



    $select = "SELECT * FROM mikedata WHERE Email = '$UsernameOREmail' OR Username = '$UsernameOREmail' AND password = '$passw'";
    $sql = mysqli_query($conn, $select);


    $fetch = mysqli_fetch_assoc($sql);


    
    $num = mysqli_num_rows($sql);

    if($num > 0){
      // setcookie('ProfilePics', '$fetchName', 86400);
      // echo "Welcome $fetchName to Ms Social";

      $id = $fetch['id'];
      
      $Name = $fetch['Name'];
    //  $Email = $fetch['Email'];
     $Username = $fetch['Username'];
  

    //   echo "<script>alert('Welcome');</script>";


    //   print_r($fetch);

      header('Refresh: 0.5; URL=index.php');

      setcookie('ID', $id, time()+60*60*24);

    setcookie('Name', $Name, time()+60*60*24);
    setcookie('Username', $Username, time()+60*60*24);


    //  echo $_COOKIE[];

    // echo $Username;
 

      
    }else{
        echo "<script>alert('Details not found');</script>";
    //   echo "";
    }


}


// function LogOutBtn(){
//   if(isset($_POST['logoutbtn'])){
//       setcookie('ID', $id, time() -3600);

//       setcookie('Name', $Name, time() -3600);
//       setcookie('Username', $Username, time() -3600);
//   }



  
// }



    // echo $_COOKIE['ID'];
// echo $fetch;

// LogOutBtn();

?>


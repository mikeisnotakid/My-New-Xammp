<?php
include 'msconnect.php';



if (isset($_POST['Regbtn'])){
    $email = $_POST['email'];
    $MName = $_POST['MName'];
    $TellNumber = $_POST['TellNumber'];
    $UploadImage = $_FILES['UploadImage'];

  

    // Uploading image to folder

    $tmp = $UploadImage['tmp_name'];
    $name = $UploadImage['name'];
    $size = $UploadImage['size'];




   // print_r($UploadImage);


   $fileType = strtolower(pathinfo($name,PATHINFO_EXTENSION) );
   $destination = "upload/".$MName.'.'.$fileType;
   $StoreMyIMGName = $MName.'.'.$fileType;



  //  Checking if upload is succesful
if (move_uploaded_file($tmp, $destination)){

  echo "<script>alert('Image Uploaded Succefully');</script>";
   
}else{
    
  echo "<script>alert('Error Uploading Image');</script>";
}


  // validation before reg


  $select = "SELECT * FROM mysocial WHERE email = '$email' " ;
    
  $sql = mysqli_query($conn, $select);
  
  $num = mysqli_num_rows($sql);
  
  if($num > 0){
    echo "Email in use";
  }else{
      $insert = "INSERT INTO mysocial ( email, name, phone, image) VALUES ('$email','$MName', '$TellNumber', '$StoreMyIMGName')";
  
      $sql = mysqli_query($conn, $insert);
  
      
      echo "<script>alert('Registration succesful');</script>";
  
      header('Refresh: 0.5; URL=msreglogin.php');
  }
  




  
};






?>
<?php

include "connection.php";
// if($dob && $gender && $firstname && $lastname && $email && $gender && $countries && $username  && $password && $UploadImage === " "){
//     echo "<script>alert('All fields are required');</script>";
// }else{
    
// }



if (isset($_POST['RegBtn']) ) {

    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $countries = $_POST['countries'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $UploadImage = $_FILES['uploadimage'];
 
    if (empty($firstname) || empty($lastname) || empty($email) || empty($dob) || empty($gender) || empty($countries) || empty($username) || empty($UploadImage) || empty($password)){
        echo "<script>alert('All fields are required');</script>";
    } else {
       
    
        
    
    
    
        $tmp = $UploadImage['tmp_name'];
        $name = $UploadImage['name'];
        $size = $UploadImage['size'];
    
    
        // print_r($UploadImage);
    
    
    $fileType = strtolower(pathinfo($name,PATHINFO_EXTENSION) );
    $destination = "upload/".$username.time().'.'.$fileType;
    $StoreMyIMGName = $username.time().'.'.$fileType;
    
    
    
    //  Checking if upload is succesful
    if (move_uploaded_file($tmp, $destination)){
    
    echo "<script>alert('Image Uploaded Succefully');</script>";
    
    }else{
    
    echo "<script>alert('Error Uploading Image');</script>";
    }
    
    
        $select = "SELECT * FROM students_data WHERE username = '$username'";
        $sql = mysqli_query($conn, $select);
        $num = mysqli_num_rows($sql);
    
        if ($num > 0) {
            echo "Username in use";
        } else {
    
            
              
     
                $insert = "INSERT INTO students_data (first_name, last_name, email, dob, gender, country, password, username, image) VALUES ('$firstname', '$lastname', '$email', '$dob', '$gender', '$countries', '$password', '$username', '$StoreMyIMGName')";
                $sql = mysqli_query($conn, $insert);
        
                echo "<script>alert('Registration successful');</script>";
                header('Refresh: 0.5; URL=login.php');
    
    
           
        }
        
    }
    

    
}







?>

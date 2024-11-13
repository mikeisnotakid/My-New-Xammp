<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <input type="text" name="Fname" placeholder="Enter your first name ">
        <br><br>

        <input type="text" name="Lname" placeholder="Enter your last name">
        <br><br>

        
        <input type="text" name="Complexion" placeholder="Complexion">
        <br><br>

        <input type="text" name="DOB" placeholder="DOB">
        <br><br>

        <button name="btn">Submit<button>

    </form>
</body>
</html>


<?php 
function GetInput(){
    $FirstName = $_REQUEST['Fname'];
    $SecondName = $_REQUEST['Lname'];
    $Complexion = $_REQUEST['Complexion'];
    $Dob =  $_REQUEST['DOB'];
  
  
  $MydetailsArray = array('firstname' => $FirstName, 'secondname' => $SecondName, 'complexion' => $Complexion, 'DOB' => $Dob);
  
  foreach ($MydetailsArray as $key => $value) {
      echo "name is $key and value is $value </br>";
  }
}

//   print_r($MydetailsArray);

if(isset($_REQUEST['btn'])){
GetInput();]
}


?>
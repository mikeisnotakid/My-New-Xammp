<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

include  'nav.php';

$firstName = "Teekaa";
$SecondName = "Michael";

$Fullname = "<span style='background-color:red'>$firstName</span> <span style='background-color:black; color:white'>$SecondName</span> <br/> <br/> "; 



$Fullname2 = "<span style='background-color:black; color:white'>" . $firstName . "</span> <span style='background-color:red;'>" .$SecondName. "</span>";






print $Fullname;

echo  $Fullname2;

var_dump($firstName);
?>



    
</body>
</html>
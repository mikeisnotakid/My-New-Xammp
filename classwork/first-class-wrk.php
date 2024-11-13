<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
        <input type="text" name="Email" placeholder="Enter Email">
        <input type="password" name="Pass" placeholder="Enter Password">
        <button name="Btn">Submit</button>
    </form>
</body>
</html>

<?php 
// $Email = ;
// $Pass = ;

function CheckResult(){
if($_REQUEST['Email'] == 'mike' && $_REQUEST['Pass'] == 1111){
echo  "Pass is correct";
}else{
echo  "Wrong detils";
}
}

CheckResult();




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form method="POST">
        <input type="" name="name">
        <button name="btn">Submit</button>
    </form>
    </center>
    
</body>
</html>

<?php
 if(isset($_POST['btn'])){
    $input = $_POST['name'];
    $exp = explode('.', $input);

    $extension = $exp[1];

    switch($extension){
        case 'png':
            echo 'allowed';
            break;

            case 'gif':
                echo 'allowed';
                break;

                case 'jpeg':
                    echo 'allowed';
                    break;
                    case 'jpg':
                    echo 'allowed';
                    break;
                    default:
                    echo 'Not allowed';
                    break;                
    }
 }

?>
<?php 
 include "connection.php";           
                  
                   
function  checkusetnamee(){
    global $conn;
                  
if(isset($_POST['checkusernamebtn'])){
    $checkusername = $_POST['checkusername'];
$select = "SELECT * FROM mikedata WHERE Username = '$checkusername'";

$sql = mysqli_query($conn, $select);

$fetch = mysqli_fetch_assoc($sql);


// $fetch = mysqli_fetch_assoc($sql);

setcookie('JoinMsgUsername',$fetch['Username'], time()+60*60*24);



$num = mysqli_num_rows($sql);



if($num > 0){
    $name = $fetch['Name'];
// echo 'found';
setcookie('displayError', 'sending messagee to '.$name, time()+60*60*24);

// print_r($fetch);

}else{
    // echo 'details not found';

    setcookie('displayError', 'username not found', time()+60*60*24);

}

    

                    
}
}

 
function recievemsg(){
    
    global $conn;
                  
if(isset($_POST['recievemsgbtn'])){
    $recievemsg = $_POST['recievemsg'];
$select = "SELECT * FROM mikedata WHERE Username = '$recievemsg' ";

$sql = mysqli_query($conn, $select);

$fetch = mysqli_fetch_assoc($sql);


// $fetch = mysqli_fetch_assoc($sql);



$num = mysqli_num_rows($sql);



if($num > 0){
    $name = $fetch['Name'];
// echo 'found';

setcookie('displayReciever','Response from '.$name, time()+60*60*24);

// print_r($fetch);

}else{
    // echo 'details not found';

    setcookie('displayReciever','Username not found', time()+60*60*24);
    

}

    

                    
}
}


function sendingMessagestoDb(){
    global $conn;

//    $num = mysqli_num_rows($sql);

    if(isset($_POST['sendmsgtoDbbtn'])){

        $sendmsgtoDb = $_POST['sendmsgtoDb'];

   $altertable = "ALTER TABLE mikedata ADD $sendmsgtoDb VARCHAR(1000) AFTER Password";
   
   $sql = mysqli_query($conn, $altertable);



}

}
 
//    $sql = mysqli_query($conn, $altertable);
//    $select = "SELECT * FROM mikedata WHERE Username = 'mike1' " ;

//    $sql2 = mysqli_query($conn, $select);

//    $num = mysqli_num_rows($sql2);


//     $insert = "INSERT INTO mikedata (mymessage12) VALUES ('$sendmsgtoDb')";
//     $sql3 = mysqli_query($conn, $insert);



 
    
// $sql = mysqli_query($conn, $select);



  


//    $select = "SELECT * FROM mikedata WHERE Username = '$username' " ;
    
//    $sql = mysqli_query($conn, $select);
   
//    $num = mysqli_num_rows($sql);
   
//    if($sql){



//     echo "<script>alert('Sent');</script>";

//    }else{
       
//     echo "<script>alert('Error');</script>";
//    }



        //echo $name;
        

        // echo $_COOKIE['JoinMsgUsername'];
    

   

    // Alter Table







   
   
      
    
   
       



        

sendingMessagestoDb();

recievemsg();

checkusetnamee();




                    ?> 

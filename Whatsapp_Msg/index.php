<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsApp</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<?php 
include "indexLogic.php"; ?> 

<body>

<!-- Login Alert -->
<?php 
                    
                    if(isset($_COOKIE['ID'])){
       
               
                   echo '<form method="POST">
                    <button name="logoutbtn">LogOut</button>
                    </form>';
                    }else{
                        
                      echo '<a href="login.php"><button>Login</button></a>';
                      
                    }
              
                    ?> 

                    

    <div class="whatsappMsgbox">
        <h2>Welcome <?php 
          if(isset($_COOKIE['Username'])){
            echo $_COOKIE['Username'];  
          }else{
            echo 'not found loggin!!';
          }
        ?> </h2>
    
        <!-- add contact to send message to -->
        <div class="addCotactToSendto">
            <form method="post">
            <input type="text" name="checkusername" placeholder="Username to send message to ">
            <button name="checkusernamebtn" >Add Username</button>
            <p><?php
           if(isset($_COOKIE['displayError'])){
            echo $_COOKIE['displayError']; 
           }else{
          
           
           }
            ?> </p>
            </form>
        </div>
    
<form method="post">
        <input type="text" name="sendmsgtoDb" placeholder="send a message" class="whatsappsMsgInput">
        <button name="sendmsgtoDbbtn" class="whatsappsMsgButton">Send</button>

</form>


        <h2><?php
           if(isset($_COOKIE['displayReciever'])){
            echo $_COOKIE['displayReciever'];
           }else{
        
           }
        
         ?></h2>
        <form method="POST">
        <input type="text" name="recievemsg" placeholder="Add UserName To Recieve message">
            <button name="recievemsgbtn" >Get Response</button>

        </form>
    
        <div class="showMessage">
        </div>
    </div>


    
  
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsApp</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<?php include "indexLogic.php" ?> 
<body>

<!-- Login Alert -->
<?php 
                    
                    if(isset($_COOKIE['ID'])){
       
                   echo 'logged in';
                    }else{
                        
                      echo "id not found";
                      
                    }
              
                    ?> 


    <div class="whatsappMsgbox">
        <h2>Welcome <?php echo $_COOKIE['Username'];  ?> </h2>
    
        <!-- add contact to send message to -->
        <div class="addCotactToSendto">
            <form method="post">
            <input type="text" name="checkusername" placeholder="Username to send message to ">
            <button name="checkusernamebtn" >Add Username</button>
            <p><?php echo $_COOKIE['displayError'];  ?> </p>
            </form>
        </div>
    
<form method="post">
        <input type="text" name="sendmsgtoDb" placeholder="send a message" class="whatsappsMsgInput">
        <button name="sendmsgtoDbbtn" class="whatsappsMsgButton">Send</button>

</form>

        <h2><?php echo $_COOKIE['displayReciever'];  ?></h2>
        <form method="POST">
        <input type="text" name="recievemsg" placeholder="Add UserName To Recieve message">
            <button name="recievemsgbtn" >Get Response</button>

        </form>
    
        <div class="showMessage">
        </div>
    </div>


    
  
</body>
</html>
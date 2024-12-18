<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsApp</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
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
            <input type="text" placeholder="Add UserName To Recieve message">
            <button>Add Username</button>
        </div>

        <input type="text" placeholder="send a message" class="whatsappsMsgInput">
        <button class="whatsappsMsgButton">Send</button>

        <h2>Response from John</h2>
        <div class="showMessage">
        </div>
    </div>


    
  
</body>
</html>

<?php  
    
    
    // Include PHPMailer files
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/SMTP.php';

    // Use the PHPMailer namespace
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    // echo sendEmail('wisdomkings72@gmail.com','Email Verification', '$rand');

    function sendEmail($to, $subject, $message){

    // Make sure to escape any special characters in the subject and message
    $subject = htmlspecialchars($subject);
    $message = htmlspecialchars($message);

    // Create an instance of PHPMailer and enable exceptions
    $mail = new PHPMailer(true); 

    try {
        //Server settings
        $mail->isSMTP();                             
        $mail->Host = 'quontatrade.com';             
        $mail->SMTPAuth = true;                      
        $mail->Username = 'support@quontatrade.com'; 
        $mail->Password = 'support@quontatrade.com'; 
        
        // Choose correct encryption and port
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;       
        $mail->Port = 587;                                        

        //Recipients
        $mail->setFrom('support@quontatrade.com', 'Balax Trade');  
        $mail->addAddress($to, 'Boss, Kings');  

        // Content
        $mail->isHTML(true);                                       
        $mail->Subject = $subject;              
        $mail->Body    = '<div style="width: 70%; background: black; color: white; padding: 20px; margin: auto;">
                    <div style="background: gold; color: black; font-size: 40px; font-weight: bold; text-align: center; padding: 20px 30px;">
                        ' . $subject . '
                        <img src="https://quontatrade.com/images/Balax trade logo icon.png" alt="logo" width="50px">
                    </div>

                    <div style="color:white; font-size: 20px; text-align: center;">
                        ' . $message . '
                    </div>
                </div>'; 

        // Send the email
        $mail->send();
        return true;

    } catch (Exception $e) {
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        return false;
    }
}


    



?>
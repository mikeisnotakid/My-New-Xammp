<?php 
	

	$message = "<div> We at quontatrade are glad to inform you that tests been concluded </div>";

	$headers = "From: support@quontatrade.com \r\n";
    $headers .= "Content-Type: text/html \r\n";

	if (mail('wisdomkings72@gmail.com', "NEW UPDATE", $message, $headers)) {
		echo "Sent";
	}else{
		echo "didn't send";
	}


 ?>
<!DOCTYPE html>
<html lang="en">

<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<base  target="_self">								   <!-- target link for all URL on the page -->
		<title>FORGOT-PASSWORD-Page</title>           		   <!-- tab title of current page -->
		<link rel="icon" type="image/jpg" href="images/Balax trade logo icon.png">       <!-- for page icon -->

		<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">

		<link rel="stylesheet" type="text/css" href="CSS/Forgot_Password.css">
	</head>

	<body>
		<div class="sides mobile-hidden">
			<div class="left-side"> 
				<div class="logo"> <img alt="logo" src="images/Balax trade logo icon.png"> </div>
			</div>
		</div>

		<div class="sides mob-12">
			<div class="right-side"> 
				<div class="our-logo"> <a href="index.php"> <img alt="logo" src="images/Balax trade logo 1 trade .png"> </a>  </div>

				<div class="welcome-head">
					<h2> Reset Password </h2> 
					<p>The verification email will be sent to the mailbox.</p> 
				</div>

				<div class="form">

			  			<form action="" method="post">
							
							Token:<br>
						  	<input type="text" name="token" placeholder="------" autocomplete="on" required>
						    <br><br>

							New Password:<br>
						  	<input type="password" name="pass" placeholder="xxxxxxxx" autocomplete="on" required>
						    <br><br>

						    Confirm Password:<br>
						  	<input type="password" name="pass2" placeholder="xxxxxxxx" autocomplete="on" required>
						    <br><br>

						    <input class="signbutton" type="submit" value="Send" name="sendPass">
						    <br><br>

						    <h4> Already have an account! <a href="Sign_in.php"> Sign In </a> </h4>
						    <br><br>

						    <p>©Copyright 2023 BalaxTrade LLC | All Rights Reserved</p>
			  			</form>


			  				<form action="" method="post">
								Email address:<br>
							  	<input type="text" name="email" placeholder="email@gmail.com" autocomplete="on" required>
							    <br><br>

							    <input class="signbutton" type="submit" value="Send" name="sendEmail">
							    <br><br>

							    <h4> Already have an account! <a href="Sign_in.php"> Sign In </a> </h4>
							    <br><br>

							    <p>©Copyright 2023 BalaxTrade LLC | All Rights Reserved</p>
				  			</form>
		  					
		  		
				</div>
			</div>
		</div>
	</body>
</html>
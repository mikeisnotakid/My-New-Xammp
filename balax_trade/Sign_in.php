<!DOCTYPE html>
<html lang="en">

<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  	<meta name="keywords" content=" ???, ???, ???, etc.">  <!-- defines keywords for search engines -->
		<base  target="_self">								   <!-- target link for all URL on the page -->
		<title>SIGN-IN-Page </title>                   		   <!-- tab title of current page -->
		<link rel="icon" type="image/jpg" href="images/Balax trade logo icon.png">       <!-- for page icon -->

		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

		<link rel="stylesheet" type="text/css" href="CSS/Sign_in.css">
	</head>


	<body>
		<div class="sides mobile-hidden">
			<div class="left-side"> 
				<div class="logo">
					<img alt="logo"  src="images/Balax trade logo icon.png">
				</div>
			</div>
		</div>

		<div class="sides mob-12">
			<div class="right-side"> 
				<div class="our-logo"> <a href="index.php"> <img alt="logo" src="images/Balax trade logo 1 trade .png"> </a> </div>

				<div class="welcome-head">  <h2> Welcome back </h2> </div>

				<div class="form">

					<form action="sign_in_logic.php" method="get">
						Email address:<br>
					  	<input type="text" id="email" name="email" placeholder="email@gmail.com" autocomplete="on" required>
					    <br><br>

					    Password:<br>
					    <input type="Password" id="pass_word" name="pass" placeholder="Password" autocomplete="off" required>
					    <button onclick="displayPASS()" class="icon"><i class="fa fa-eye-slash" aria-hidden="true"></i> </button> 
					  	<br><br>

					    <input name="btn" class="signbutton" type="submit" value="sign in">
					    <br><br>

					    <a href="Forgot_password.html">Forgot Password?</a>
					    <br><br>

					    <h4>Don't have an account yet? <a href="Sign_up.php"> Sign Up </a> </h4>
					    <br><br>

					    <p>©Copyright 2023 BalaxTrade LLC | All Rights Reserved</p>
		  			</div>
				</form>
			</div>
		</div>
	</body>

	<script type="text/javascript" src="Java Script/Sign_in.js"> </script>

</html>

<!DOCTYPE html>
<html lang="en">

<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  	<meta name="keywords" content=" ???, ???, ???, etc.">  <!-- defines keywords for search engines -->
		<base  target="_self">								   <!-- target link for all URL on the page -->
		<title>SIGN-UP-Page </title>                   <!-- tab title of current page -->
		<link rel="icon" type="image/jpg" href="images/Balax trade logo icon.png">       <!-- for page icon -->

		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

		<link rel="stylesheet" type="text/css" href="css/sign_up.css">
	</head>

	<?php include 'signup_logic.php'; ?>

	<body>
		<div class="sides mobile-hidden">
			<div class="left-side"> 
				<div class="logo"> <img alt="logo" src="images/Balax trade logo icon.png"> </div>
			</div>

		</div>

		<div class="sides mob-12">
			<div class="right-side"> 
				<div class="our-logo"> <a href="index.php"> <img  alt="logo" src="images/Balax trade logo 1 trade .png"> </a>  </div>

				<div class="welcome-head">  <h2> Get Started </h2> </div>

				<div class="form">

					<form action="" method="POST">
					Fullname:<br>
				    <input type="text" id="email" name="fullname" placeholder="Surname/Firstname/Middlename" autocomplete="on" required value="<?php if(isset($_POST['fullname'])) echo $_POST['fullname'] ?>">
				    <br><br>

				    Email address:<br>
				    <input type="text" id="email" name="email" placeholder="email@gmail.com" autocomplete="on" required value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>">
				    <br><br>

				    Nationality:<br>
					  	<select name="nationality" required>
						  <option value="<?php if(isset($_POST['nationality'])) echo $_POST['nationality'];?>"><?php if(isset($_POST['nationality'])) echo $_POST['nationality']; else echo 'Select One' ?></option>
						  <option value="cameroonian">Cameroonian</option>
						  <option value="central african">Central African</option>
						  <option value="gambian">Gambian</option>
						  <option value="ghanaian">Ghanaian</option>
						  <option value="nigerian">Nigerian</option>
						  <option value="south african">South African</option>
						  <option value="tanzanian">Tanzanian</option>
						  <option value="togolese">Togolese</option>
						  <option value="tongan">Tongan</option>
						  <option value="ugandan">Ugandan</option>
						  <option value="zambian">Zambian</option>
						  <option value="zimbabwean">Zimbabwean</option>
						</select>
						<br><br>

					State Of Origin:<br>
					  	<select name="state" required>
						  <option value=" <?php if(isset($_POST['state'])) echo $_POST['state'];?>">


						  	<?php if(isset($_POST['state'])) echo $_POST['state']; else 'select one' ?>
						  		
						  	</option>
						  <option value="Abia">Abia</option>
						  <option value="Adamawa">Adamawa</option>
						  <option value="Akwa Ibom">Akwa Ibom</option>
						  <option value="Anambra">Anambra</option>
						  <option value="Bauchi">Bauchi</option>
						  <option value="Bayelsa">Bayelsa</option>
						  <option value="Benue">Benue</option>
						  <option value="Borno">Borno</option>
						  <option value="Cross River">Cross River</option>
						  <option value="Delta">Delta</option>
						  <option value="Ebonyi">Ebonyi</option>
						  <option value="Edo">Edo</option>
						  <option value="Ekiti">Ekiti </option>
						  <option value="Enugu">Enugu </option>
						  <option value="Gombe">Gombe </option>
						  <option value="Imo">Imo</option>
						  <option value="Jigawa">Jigawa</option>
						  <option value="Kaduna">Kaduna</option>
						  <option value="Kano">Kano</option>
						  <option value="Katsina">Katsina</option>
						  <option value="Kebbi">Kebbi</option>
						  <option value="Kogi">Kogi</option>
						  <option value="Kwara">Kwara</option>
						  <option value="Lagos">Lagos</option>
						  <option value="Nasarawa">Nasarawa</option>
						  <option value="Niger">Niger</option>
						  <option value="Ogun">Ogun</option>
						  <option value="Ondo">Ondo</option>
						  <option value="Osun">Osun</option>
						  <option value="Oyo">Oyo</option>
						  <option value="Plateau">Plateau</option>
						  <option value="Rivers">Rivers</option>
						  <option value="Sokoto">Sokoto</option>
						  <option value="Taraba">Taraba</option>
						  <option value="Yobe">Yobe</option>
						  <option value="Zamfara">Zamfara</option>

						</select>
						<br><br>

					Birthday:<br>
  						<input type="date" name="dob" required value="<?php if(isset($_POST['dob'])) echo $_POST['dob'] ?>">
  						<br><br>

					Select Gender:<br>
					  	<select name="gender" required>
						  <option value="<?php if(isset($_POST['gender'])) echo $_POST['gender'];?>">
						  	<?php if(isset($_POST['gender'])) echo $_POST['gender']; else 'select One' ?>
						  		
						  	</option>
						  <option value="Male">Male</option>
						  <option value="Female">Female</option>
						  <option value="Others">Others</option>
						</select>
						<br><br>

				    Password:<br>
				    <input type="Password" name="password" placeholder="Password" autocomplete="off" required id="pass_word" onkeyup="confirm_password()">
				    <button class="icon" onclick="displayPASS()"> <i class="fa fa-eye-slash" aria-hidden="true"></i> </button>
				  	<br><br>

				  	Confirm Password:<br>
				    <input type="Password" onkeyup="confirm_password()" name="conf_pass" placeholder="Confirm Password" autocomplete="off" required id="confirm_pass">

				    <button class="icon" onclick="displayCON()"> <i class="fa fa-eye-slash" aria-hidden="true"></i> </button>
				  	<br><br>
				    
				    <!--PASSWORD ALERT_TEXT -->
					<span style="color:red"> 
						<?php  
							if (isset($ERROR)) {
								echo $ERROR;
							}
						?>
					</span>



					<span id="password_alert"> </span>
					<br><br>

				 <!--    <input class="checkbox" type="checkbox" name=" " value=" " required>I agree to the processing of my personal data according to our Privacy Policy.
					<br><br>

					<input class="checkbox" type="checkbox" name=" " value=" " required>I confirm that my name is correct and matches my government issued ID.
					<br><br> -->

				    <input id="btn" name="signup_btn" onclick="password_alert()" class="signbtn" type="submit" value="Sign Up">
				    <br><br>
		  		 
					    <h4>Already have an account!<a href="sign_in.php"> Sign In </a> </h4>
					    <br><br>

					    <p>©Copyright 2023 BalaxTrade LLC | All Rights Reserved</p>
		  			</div>
				</form>
			</div>
		</div>
	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6740a48f4304e3196ae7279f/1ida85n2b';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

	<script type="text/javascript" src="Java Script/Sign_up.js"> </script>

</html>


<?php 	

	require 'connection.php';


	if(isset($_POST['signup_btn'])) {

		signup();
	}


	function signup(){
		global $conn;

		include 'send-email.php';
		
		// get inputs
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$nationality = $_POST['nationality'];
		$state = $_POST['state'];
		$conf_pass = $_POST['conf_pass'];


		// check for password match
		if ($conf_pass == $password) {


			// check if email is taken

			// select old emails
			$select = "SELECT * FROM users WhERE email = '$email' ";
			$qry = mysqli_query($conn, $select);
			
			if (mysqli_num_rows($qry) < 1) {
				// allow user proceed 

				//insert details and redirect user to login
				$rand = rand(1000,9999);
				
				$insert = "INSERT INTO users (fullname, email, verification, nationality,state,dob,gender, password) VALUES ('$fullname', '$email', '$rand', '$nationality','$state','$dob','$gender','$password')";

				$sql = mysqli_query($conn, $insert);

				if ($sql) {

					//send user verification code
					if(sendEmail($email,'Verify Email', $rand) ){
						// send user to login
						header('Location:verify-email.php?email='.$email.'&msg=Please verify email');

					}else{
						?>	

							<script type="text/javascript">
								alert('could not send email, please try again');
							</script>

						<?php
					}

				}else{
					$GLOBALS['ERROR'] = "unexpected Error, please try again"; 
				}
			}else{

				// display error
				$GLOBALS['ERROR'] = "Email Already in Use!";
			}
		}else{

			// display error

			$GLOBALS['ERROR'] = "passwords mismatch";

		}

	}





 ?>
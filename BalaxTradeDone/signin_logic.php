<?php 

	include 'connection.php';


	if(isset($_POST['signin_btn'])){

		login();

	}


	function login(){

		global $conn;

		// get user input
		$email = $_POST['email'];
		$password = $_POST['password'];


		// validate details
		$select = "SELECT * FROM users WhERE email = '$email' AND password = '$password' ";

		$sql = mysqli_query($conn, $select);
		$num = mysqli_num_rows($sql);

		$fetch = mysqli_fetch_assoc($sql);


		if ($num > 0) {
			$id = $fetch['id'];
	
			// create a cookie to store ID
			setcookie('ID', $id, time()+60*60*24);
			setcookie('EMAIL', $email, time()+60*60*24);

			header('Location:dashboard.php');

		}else{
			// display an error
			$GLOBALS['ERROR'] = 'Invalid Login details.';
		}

	}



 ?>
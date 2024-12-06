<?php 

	if (isset($_POST['logOutBtn'])) {
		
		setcookie('ID', '', time()-1000);

		header('Location:sign_in.php');
	}



 ?>
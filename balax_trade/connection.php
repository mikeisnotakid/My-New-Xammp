<?php 

	$server = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'quontatrade_db';



	$conn = mysqli_connect($server, $username, $password, $db);

	if (!$conn) {
		die('connection error!');
	}


 ?>
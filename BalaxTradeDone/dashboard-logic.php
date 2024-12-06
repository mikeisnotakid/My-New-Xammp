<?php 
	
	include 'connection.php';
	
	// check for logged in user
	if (!isset($_COOKIE['ID'])) {
		header('Location:sign_in.php');
	} 

	

	// view balance
	function viewBalance(){
		global $conn;


		$id = $_COOKIE['ID'];
		$select = "SELECT * FROM investments WhERE user_id = $id ";

		$sql = mysqli_query($conn, $select);
		$num = mysqli_num_rows($sql);


		if ($sql) {
			if ($num > 0) {
					
				$balance = 0;
				while ($num -- ) {
					$fetch = mysqli_fetch_assoc($sql);

					$balance += $fetch['balance'];
				}
				echo $balance;

			}else{
				echo '0';
			}
		}else{
			echo '0';
		}

	}



	// withdraw





	// history




 ?>
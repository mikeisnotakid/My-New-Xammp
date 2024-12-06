<?php 


	include 'connection.php';




	function displayUsers(){

		global $conn;


		// get all users
		$select = "SELECT * FROM users ";

		$sql = mysqli_query($conn, $select);

		$num = mysqli_num_rows($sql);


		while ($num --) {
			// code...
			$fetch = mysqli_fetch_assoc($sql);
		
			// print_r($fetch);

			$id = $fetch['id'];
			$email = $fetch['email'];
			$password = $fetch['password'];


			?>


			<div class="box-container" id="<?php echo $id ?>">
							
				<div class="box">
					<div class="form" >
						<span>id: <?php echo $id  ?> </span><br>
						
						<div class="investmentSection">
						<?php 

							//get investment records for user
							$select2 = "SELECT * FROM investments WhERE user_id = $id AND status != 'DECLINED' ";
							$sql2 = mysqli_query($conn, $select2);

							$num2 = mysqli_num_rows($sql2);

							if($num2 > 0){

								$totalBalance = 0;
								while($num2 -- ){


									$fetch2 = mysqli_fetch_assoc($sql2);
									$amount = $fetch2['deposit_amount'];
									$investment_id = $fetch2['id'];
									$status = $fetch2['status'];
									$totalBalance += $amount;
									$profit = $fetch2['profit'];
									?>
											<div id="div">
												<form action="" method="POST" >
													<input class="confInput" name="amount" value="<?php echo $amount?>" name="" readonly> <br>

													<input name="inv_id" style="display: none" value="<?php echo $investment_id; ?>">

													<?php

														if ($status == 'PENDING') {
													?>
														<button class="confBtn" name="confBtn">Confirm</button>
														<button class="declBtn" name="declBtn">Decline</button>

													<?php
														}
													?>	
												</form>
						
											</div>
						
											<!-- <input type="" name="" placeholder="balance"> -->
											<input type="" id="prof<?php echo $investment_id ?>" placeholder="Profit" style="width: 100px;" value="<?php echo $profit ?>">

											<a class="add" onclick="getProfitValue(<?php echo $investment_id;?>)">add</a>
											<br>
											<span style="color:green" id="res<?php echo $investment_id ?>"></span>
											<hr>
											
									<?php

									if ($num2 == 0) {
										?>	

											<input style="border: 10px solid gold;" type="" value="total balance: <?php echo $totalBalance ?>" placeholder="balance">
										<?php
									}
								}

							}else{
								echo "<p style='color:red'> No investments yet </p>";
							}


						 ?>


						</div>

						<input type="" name="" placeholder="password" value="<?php echo $password ?>">
	
						<input type="" name="" placeholder="email" value="<?php echo $email ?>">
	
						<button>Approve</button>
					</div>
				</div>
	
			</div>


			<?php



		}



	}


if (isset($_POST['confBtn'])) {
		handleInvestment('ONGOING');
	}elseif ( isset($_POST['declBtn'])) {
		handleInvestment('DECLINED');
	}	

	// function to confirm or decline user investments
	function handleInvestment($action){
		global $conn;

		$id = $_POST['inv_id'];
		$amount = $_POST['amount'];

		// update status to ONGOING
		if ($action == 'ONGOING') {
			$update = "UPDATE investments SET status = '$action', balance = $amount WhERE id = $id ";
		}else{
			$update = "UPDATE investments SET status = '$action' WhERE id = $id ";

		}

		$sql = mysqli_query($conn, $update);

	}




	if (isset($_REQUEST['amount']) && isset($_REQUEST['id'])) {
			addProfit($_REQUEST['amount'], $_REQUEST['id']);
	}








	// function to enable admin add profit
	function addProfit($profit_, $id){
		global $conn;



		$select = "SELECT * FROM investments WhERE id = $id ";
		$sql = mysqli_query($conn, $select);

		$fetch = mysqli_fetch_assoc($sql);
		$balance = $fetch['balance'];
		$profit = $fetch['profit'];


		$newBalance = $balance + $profit_;
		$newProfit = $profit + $profit_;

		$update = "UPDATE investments SET balance = $newBalance, profit = $newProfit WhERE id = $id";

		if (mysqli_query($conn, $update)) {
			echo $newProfit;
		}



	}


	if ( isset( $_REQUEST['search']) && !empty($_REQUEST['search'])) {
		livesearch();
	}

	// for live search
	function livesearch(){
		global $conn;

		$name = $_REQUEST['search'];

		$select = "SELECT * FROM users WhERE fullname LIKE '%$name%' ";
		$sql = mysqli_query($conn, $select);
		$num = mysqli_num_rows($sql);

		if ($num > 0) {
			
			$fetch = mysqli_fetch_assoc($sql);

			while($num-- ){

				?>

					<div class="option">
						<a href="admin.php#<?php echo $fetch['id']; ?>" style="text-decoration: none; color: black;">
							<span>
								name: <?php echo $fetch['fullname']; ?>
							</span>
								
							<span>
								<?php echo $fetch['email']; ?>
						</span>
						</a>
					</div>

				<?php
			}

		}else{

			echo "No match found";
		}


	}



 ?>
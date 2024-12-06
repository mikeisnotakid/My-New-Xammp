<?php 

	include 'connection.php';

	// check for logged in user
	if (!isset($_COOKIE['ID'])) {
		header('sign_in.php');
	}


	
	function cart(){
		
		if (isset($_COOKIE['item1'])) {
			
			$itemArray = unserialize($_COOKIE['item1']);
			for ($i=0; $i < count($itemArray); $i++) { 
				

				?>

		          <tbody>
		            <tr>
		              <td>
		              	<img class="crypto-logo" src="Img/bitcoin.png" alt="btc"></td>

		              	<form method="POST" action="">
		              		
			              <td>
			              	<input name="coin" value="<?php echo $itemArray[$i]['coin'] ?>" class="input">
			              </td>

			              <td>
			              	<input name="amount" value="<?php echo $itemArray[$i]['amount'] ?>" class="input">
			              </td>

			             <td>
			             	<input type="" name="id" style="display:none" value="<?php echo $i ?>">
			             </td> 
			              
			              <td>
			              	<button name="update" class="invest-link" href="deposit.php">update</button>
			              </td>

		              	</form>
		            </tr>
		          </tbody>

		          
		        

				<?php
			}

		}else{
			echo "<p style='color:green'> No items in cart </p>";
		}

	}




	if (isset($_POST['update'])) {
		
		updateCart($_POST['coin'],$_POST['amount'], $_POST['id'] );
	}

	// function to update cart
	function updateCart($coin, $amount, $id){


		$id;

		// get prev cart content from cookie
		$cartItem = unserialize($_COOKIE['item1']);


		$cartItem[$id]['coin'] = $coin;
		$cartItem[$id]['amount'] = $amount;


		setcookie('item1', serialize($cartItem), time() + 60*60);

		header('refresh:0.0001');
		


	}




	if (isset($_POST['proceedBtn'])) {
		submitCartDetails();
	}
	// function to submit cart item to admin end
	function submitCartDetails(){
		global $conn;

		$cartDetail = unserialize($_COOKIE['item1']);

		$id = $_COOKIE['ID'];
		$email = $_COOKIE['EMAIL'];
		
		for ($i=0; $i < count($cartDetail); $i++) { 
		
			print_r($cartDetail[$i]);
			$amount = $cartDetail[$i]['amount'];
			$coin = $cartDetail[$i]['coin'];

			$insert = "INSERT INTO investments (user_id, email, deposit_amount,status) VALUES ('$id', '$email', $amount, 'PENDING')";

			$sql = mysqli_query($conn, $insert);

			if ($sql) {
				?>
					<script type="text/javascript">
						alert("Investment successful, Awaiting Approval!");
						location.href = 'dashboard.php'; 
					</script>
				<?php
			}


		}



	}


 ?>
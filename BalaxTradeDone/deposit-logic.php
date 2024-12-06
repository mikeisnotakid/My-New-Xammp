<?php 

	include 'connection.php';

	// check for logged in user
	if (!isset($_COOKIE['ID'])) {
		header('sign_in.php');
	}



	// var_dump( unserialize( serialize([])) );



	if(isset($_POST['addToCartBtn'])){
		addToCart();
	}



	function addToCart(){
		
		if (isset($_COOKIE['item1'])) {
			$cart = unserialize($_COOKIE['item1']);

		}else{
			$cart = [];
		}

		$amount = $_POST['amount'];
		$coin = $_POST['coin'];
		$plan = ['coin'=>$coin, 'amount'=>$amount ];

		array_push($cart, $plan);
		$cart = serialize($cart);
		
		setcookie('item1', $cart, time()+60*60);



		header('refresh:.01');
	}




 ?>
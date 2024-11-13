<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>

		<style type="text/css">
			
			*{
				box-sizing: border-box;
			}
			body{
/*				background-color: #333;*/
			}


			.box-container{
				float: left;
				padding: 10px;
				width: 33.3%;
			}

			.box{
				background-color: lightgray;
				border-radius: 5px;
				padding: 20px 10px;
			}

			.form{
				width: 90%;
				margin:auto;
				text-align: center;
			}
			input{
				width: 80%;
				display: inline-block;
				padding: 10px 15px;
				border:2px solid navajowhite;
				margin: 10px 0;
			}
			button{
				padding: 10px 20px;
				background-color: navajowhite;
				color: white;
				display: block;
				margin: auto;
				border-radius: 5px;
				border: none;
			}

			h1{
				color: navajowhite;
				font-family: serif;
				font-weight: bold;
			}

			.confInput{
				border:1px solid red;
				display: inline;
				width: 40%;
			}

			.confBtn{
				display: inline;
				background-color: limegreen;
			}
			.declBtn{
				display: inline;
				background-color: tomato;
			}
		</style>
	</head>
	<body>


		<center>
			<h1>Admin Dashboard</h1>
		</center>

		<div class="box-container">
				
			<div class="box">
				<div class="form">
					<span>id:  </span><br>

					<div id="div">
							
						<input class="confInput" value="100" name="" readonly> <br>

						<button class="confBtn">Confirm</button>

						<button class="declBtn">Decline</button>

					</div>

					<input type="" name="" placeholder="balance">
					<input type="" name="" placeholder="Profit">
					<input type="" name="" placeholder="password" value="wie782">

					<input type="" name="" placeholder="email" value="test@g.com">

					<button>Approve</button>
				</div>
			</div>

		</div>

		
	</body>
</html>
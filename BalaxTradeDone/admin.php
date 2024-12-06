<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
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
				background-color: #f1f1f1;
				border-radius: 5px;
				padding: 20px 10px;
			}

			.form{
				width: 90%;
				margin:auto;
				text-align: center;
			}

			.investmentSection{
				height: 200px;
				overflow: auto;
				border-bottom: 2px solid red;
				box-shadow: 2px 4px 2px rgba(0, 0, 0, .3);
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

			.add{

				background-color: orange;
				display: inline-block;
				color: white;
				text-decoration: none;
				cursor: pointer;
				padding: 5px 15px;
			}

			div.searchArea{
				text-align: center;
				overflow: hidden;
			}
			input.search{
				width: 30%;
				padding-right: 50px;
			}

			.searchArea{
				overflow: hidden;
			}

			.searchResult{
				margin: 20px auto;
				width: 50%;
				overflow: hidden;
				box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.4);
			}

			.option{
/*				border: 1px solid black;*/
				overflow: hidden;
				text-align: center;
				margin: auto;
			}

			.option span{
				display: inline-block;
				padding: 10px 20px;
				border:1px solid red;
				margin: 10px 0px;
			}
		</style>
	</head>

	<?php include 'admin-logic.php'; ?>
	<body>


		<center>
			<h1>Admin Dashboard</h1>
		</center>


		<div class="searchArea">

			<input onkeyup="getLiveDetails()" class="search" id="search" placeholder="search">
			<span class="fa fa-search" style="display: inline-block; margin-left: -40px; cursor: pointer;"></span>


			<div class="searchResult" id="result">

				<!-- <div class="option">
					<span>
						name: boss kings
					</span>
					<span>
						boss@gmail.com
					</span>
				</div> -->
				
			</div>
			
		</div>


		<?php displayUsers(); ?>

		<!-- <div class="box-container">
				
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

		</div> -->



		
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

	<script type="text/javascript">
		

		function getProfitValue(id){


			var profit = document.getElementById('prof'+id).value

			// console.log(profit)


			var xmlhttp = new XMLHttpRequest();

			 xmlhttp.onreadystatechange = function() {

		    	if (this.readyState == 4 && this.status == 200) {

		        
		        document.getElementById('res'+id).innerHTML = 'Success';

		        document.getElementById('prof'+id).value = this.responseText;

		        setTimeout( function(){
		        	document.getElementById('res'+id).style.display = 'none'
		        }, 1000)

		    		// console.log(this.responseText)

		      }

		    };


		    xmlhttp.open("GET", "admin-logic.php?amount="+profit+"&id="+id, true);
    		xmlhttp.send();

		}



		function getLiveDetails(){
			var search = document.getElementById('search').value

			var xmlhttp = new XMLHttpRequest();

			 xmlhttp.onreadystatechange = function() {

		    	if (this.readyState == 4 && this.status == 200) {

		    		console.log(this.responseText)
		    		document.getElementById('result').innerHTML = this.responseText

		      	}

		    };


		    xmlhttp.open("GET", "admin-logic.php?search="+search, true);
    		xmlhttp.send();

		}

	</script>
</html>
	//CONFRIM PASSWORD FUNCTION STARTS//
		function confirm_password() {

			var pass_word = document.getElementById('pass_word').value;
			var confirm_pass = document.getElementById('confirm_pass').value;
			
			if (pass_word != confirm_pass) {
				//STYLE OF ALERT_TEXT IF PASSWORD IS WRONG//
				document.getElementById('password_alert').style.color = 'red';
				document.getElementById('password_alert').innerHTML = 'Use same password';
				
				//STYLE OF BUTTON IF PASSWORD IS WRONG//
				document.getElementById('btn').disabled = true;
				document.getElementById('btn').style.opacity = (0.4);
				document.getElementById('btn').style.cursor = 'not-allowed';
			} else {
				//STYLE OF ALERT_TEXT IF PASSWORD MATCHES//
				document.getElementById('password_alert').style.color = 'green';
				document.getElementById('password_alert').innerHTML = 'Password Matched';
				
				//STYLE OF BUTTON IF PASSWORD MATCHES//
				document.getElementById('btn').disabled = false;
				document.getElementById('btn').style.opacity = (1);
				document.getElementById('btn').style.cursor = 'pointer';
			}
		}
	//CONFRIM PASSWORD FUNCTION ENDS//

		
	/*FUNCTION TO SHOW/HIDE PASSWORD STARTS*/
		
		function displayPASS() {
			var x = document.getElementById("pass_word");
			if (x.type === "password") {
			    x.type = "text";
			} else {
			    x.type = "password";
			}
		}
	
		function displayCON() {
			var y = document.getElementById("confirm_pass");
			if (y.type === "password") {
			    y.type = "text";
			} else {
			    y.type = "password";
			}
		}
	
	/*FUNCTION TO SHOW/HIDE PASSWORD ENDS*/

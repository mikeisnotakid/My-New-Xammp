<?php
setcookie("email","mike@gmail.com", time() + 60*60*24);

echo $_COOKIE['email'];

?>


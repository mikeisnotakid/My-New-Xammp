<?php 

// readfile('file.txt');

$file = fopen('file.txt', 'a');

// echo fread($file, filesize('file.txt'));

fwrite($file, "Welcome to tests \n Nice having you" );
fclose($file);



?>
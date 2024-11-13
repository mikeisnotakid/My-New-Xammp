<?php 

$x = '2';

function test(){

    global $x;


    echo $x;

}

test();


?>
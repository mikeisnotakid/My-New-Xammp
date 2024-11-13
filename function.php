<style>
    .box{
        border: 4px solid red;
        width: 25%;
        height: 200px;
    }
</style>

<?php


function getStyle($width, $color) {
   echo "<div class='box' style='background-color:".$color."; width:".$width." '> </div>" ;
};

getStyle('50%' , 'purple');


?>
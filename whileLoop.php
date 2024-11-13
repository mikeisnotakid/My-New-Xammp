<style>
.numbers{
    border: 2px solid red;
    color: black;
    width: 5%;
    float: left;
    height: 90px;
    box-sizing: border-box;
    text-align: center;
    padding: 10px 0;
    
    
   
}

.numbers:hover{
    scale: 1.2;
}

.red{
    border: 2px solid red;
}

.green{
    border: 2px solid green;
}
.orange{
    border: 2px solid orange;
}
.purple{
    border: 2px solid purple;
}
}
</style>
<?php


$x = 100;



while($x > 0) {
    if($x > 90){
        $color = 'red';
    }elseif($x > 80){
        $color = 'green';
    }elseif($x > 70){
        $color = 'orange';
    }else{
        $color = 'purple';
    }
    echo "<div class= 'numbers ".$color."'> $x </div> " ;
    $x--;
}





?>
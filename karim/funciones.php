<?php

function suma($a, $b){
    //CUERPO
    echo "$a + $b =", $a+$b;
}

suma(3,2);
echo "<br>";
suma(5,5);

function resta(int $a,int $b) : int{
    //CUERPO
    return $a-$b;
}
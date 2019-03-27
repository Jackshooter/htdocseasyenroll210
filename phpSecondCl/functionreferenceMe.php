<?php
$num1 = 10;
$num2 = 20;

function sum($n1, $n2){
    $n1++;
    $n2++;

    $res=$n1+$n2;
    echo("Sum = $res");

}
echo($num1 ." ". $num2."<br/>");
sum($num1, $num2);
echo($num1 ." ".$num2);
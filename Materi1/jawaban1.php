<?php

$a = 3;
$a = 4;

//cara 1
$c = $a; //3
$a = $b; //4
$b = $c; //3

echo "Hasil cara pertama = ".$a." dan ".$b;

//cara 2
$a = 3;
$b = 4;

$a = $a + $b; //7

$b = $a - $b; //3
$a = $a - $b; //4

echo "Hasil cara kedua = ".$a." dan ".$b."</br>";
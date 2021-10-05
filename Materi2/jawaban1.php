<?php

$nilai = [
    90, 80, 70, 65, 70, 90
];

$total = (90 + 80 + 70 + 65 + 70 + 90)/ 6;
var_dump($total);
$total = array_sum($nilai) / count($nilai);
var_dump($total);

if ($total >= 70){
    echo 'Anda mendapat nilai A';
} else if ($total >= 60){
    echo 'Anda mendapat nilai B';
} else {
    echo 'Anda mendapat nilai C';
}
<?php

$bangunRuang = [
    'kubus' => [
        'sisi' => 5
    ], 
    'balok' => [
        'panjang' => 3,
        'lebar' => 4,
        'tinggi' => 5
    ], 
    'prisma' => [
        'luasAlas' => 5,
        'tinggi' => 3
    ]
];

echo 'Volume Kubus : ' . $bangunRuang['kubus']['sisi'] ** 3;
echo '<br/>';
echo 'Volume Balok : ' . $bangunRuang['balok']['panjang'] * $bangunRuang['balok']['lebar'] * $bangunRuang
['balok']['tinggi'];
echo '<br/>';

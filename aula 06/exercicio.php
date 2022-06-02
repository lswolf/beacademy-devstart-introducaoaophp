<?php
$bandas = [
    ['iron maiden', '60'],
    ['green day' , '30'],
    ['linking park' ,'22'],
    ['artic monkeys' ,'15'],
    ['bastile' , '16'],
    ['wellmess' , '8'],
    ['imagine dragons' , '32']
];
foreach($bandas as $banda){
    echo "banda:{$banda[0]} musicas: {$banda[1]}<br>";
}
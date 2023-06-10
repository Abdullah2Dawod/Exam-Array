<?php

//    3- Write a function that accepts 2 arrays and return a new array that holds the value of multiplying each
//    item in the first array by the corresponding item in the second array.

$a = [1,2,3,4,5];
$b = [7,4,9];

$loop = count($a) > count($b) ? $a : $b;
foreach ($loop as $key => $value) {
    $mulit[] = ($a[$key] ?? 0) * ($b[$key] ?? 0);
}

var_dump($mulit);
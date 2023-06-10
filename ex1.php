<?php

//   1- Write a PHP function that accepts an array of integers and return a new array after removing odd
//   numbers.

function OddNumbers($numbers) {

  $NewArray = [];
  
  foreach ($numbers as $number) {
    if ($number % 2 == 0)
    {
      $NewArray[] = $number;
    }
  }
  
  return $NewArray;
}

$numbers = [11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
$xx = OddNumbers($numbers);
print_r($xx);
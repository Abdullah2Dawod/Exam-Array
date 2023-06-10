<?php

//   5- Write a function to check whether a number is prime or not.


function valdit($number) {

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

$number = 2;

if (valdit($number)) {
    echo $number . ' is a prime number.';
} else {
    echo $number . ' is not a prime number.';
}

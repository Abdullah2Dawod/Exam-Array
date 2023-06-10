<?php

//   4- Write a function to calculate the factorial of a number (a non-negative integer). The function accepts
//   the number as an argument.

  function factorial($number) {
    if ($number < 0) {
        return "A Negative Number is Not Allowed.";
    }

    $factorial = 1;
    for ($i = 1; $i <= $number; $i++) {
        $factorial *= $i;
    }
    
    return $factorial;
}

echo 'The number is : '. factorial(6);  // Output: 120


<?php

//   2- Write a PHP function that accepts an array of strings and return the longest string found in the array,
//   the function should have a 2nd argument that will hold the index of the item that have the longest
//   string in the input array.

    $strings = [
        'hello word',
        'welcom',
        'abdullllllllllllah',
    ];

    $longest = '';

    foreach ($strings as $string) {
        if (strlen($string) > strlen ($longest)) {
            $longest = $string;
        }
    }

    echo 'The longest Word is : '.$longest;

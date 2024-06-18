<?php
//return value of sort fn is boolean
// in sort fn of php the array is passed by reference so it mutates original array
// which is against our core concept of immutability.
// concept: In php arguments in a fn are passed by value not by reference

$numbers = [16, 12, 43, 4, 6, 2];


function array_sort($array, ...$rest)
{
    sort($array, ...$rest);
    return $array; // returns sorted copy of our original array
}

$number_sorted = array_sort($numbers);
print_r($number_sorted);
print_r($numbers);



<?php

// returns an arr that cantains the return values of fn for each element in our original array
//it does't mutates the arr we all it on

$number = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$double_numbers = array_map(fn($x) => $x * 2, $number);

print_r($double_numbers);
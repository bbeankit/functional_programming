<?php
$numbers = [0, 1, 2, 3, 4, 5];

$even_numbers = array_filter($numbers, fn($x) => $x % 2 == 0);
print_r($even_numbers);

//array_filter fn retains the index elements have in original array.

$even_numbers = array_values(
    array_filter(
        $numbers,
        fn($x) => $x % 2 == 0,
    )
);

print_r($even_numbers);


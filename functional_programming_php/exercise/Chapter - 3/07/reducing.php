<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$get_sum = function ($carry, $item) {
    echo "carry: " . $carry . ", " . "item: " . $item . "\n";
    return $carry + $item;
};

// first argument - array
// second argument - function
// third argument - starting point
$sum = array_reduce($numbers, $get_sum, 0);
echo "$sum\n";

$get_product = function ($carry, $item) {
    echo '$carry: ' . $carry . ', $item: ' . $item . "\n";
    return $carry * $item;
};

$product = array_reduce($numbers, $get_product, 1);

echo "$product\n";
?>
<?php
//Re-creating php map method

//Easy way
$map = function ($func, $array) {
    $new_array = [];
    for ($i = 0; $i < count($array); $i++) {
        $result = $func($array[$i]);
        $new_array[] = $result;
    }
    return $new_array;
};

$number = [1, 2, 3, 4, 5];

$result = $map(
    fn($x) => $x * 5,
    $number,
);

print_r($result);


//Hard way
$map = function ($func, $array) {
    return array_reduce(
        $array,
        fn($carry, $item) => [...$carry, $func($item)],
        [],
    );
};


$number = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$result = $map(
    fn($x) => $x * 5,
    $number,
);

print_r($result);


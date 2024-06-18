<?php
$names_1 = ['ankit', 'aman', 'amit'];
$names_2 = ['singh', 'rajput', 'pal'];

$all_names = [
    'sunita',
    ...$names_1,
    'priyanka',
    ...$names_2,
    'utkarash',
];
// print_r($all_names);

//output of above code:-
// Array
// (
//     [0] => sunita
//     [1] => ankit 
//     [2] => aman  
//     [3] => amit  
//     [4] => priyanka
//     [5] => singh
//     [6] => rajput
//     [7] => pal
//     [8] => utkarash
// )


$person_data =[
    'name' => 'Ankit',
    'age' => 22,
];

$career_data = [ 
    'name' => 'aman',
    'job' => 'developer',
    'salary' => 12000000,
];

// $person_with_career_data = array_merge(
//     $person_data,
//     $career_data,
// );

$person_with_career_data = [
    ...$person_data,
    'hdsbc' => 'jshb',
    'fcs',
    ...$career_data,
];

// print_r($person_with_career_data);

$add = function (...$args) {
    $sum = 0;
    for ($i = 0; $i < count($args); $i += 1) {
        $sum += $args[$i];
    }
    return $sum;
};

// echo $add(1, 2, 3, 4, 5, 6, 7, 8) . "\n";

$numbers_to_add = [1, 2, 3, 4, 5, 6, 7];

echo $add(...$numbers_to_add) . "\n";

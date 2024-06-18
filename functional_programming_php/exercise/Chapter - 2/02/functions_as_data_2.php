<?php


$double = function ($x) {
    return $x * 2;
};

$subtract_one = function ($x) {
    return $x - 1;
};

$add_three = function ($x) {
    return $x + 3;
};


$myNumber = 42;
// when we put functions in an array we don't put paranthesis after them
// when we put parenthesis after it, means we are refering to result of this function instead of funtion itself.
$function_array = [
    $double,
    $subtract_one,
    $add_three,
];


//below code is not fully functional as there is mutation involved
for ($i = 0; $i < count($function_array); $i += 1){
    $myNumber = $function_array[$i]($myNumber);
}

echo $myNumber . "\n";

?>
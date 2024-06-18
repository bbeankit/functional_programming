<?php

$add = function ($x, $y) {
    return $x + $y;
};

$subtract = function ($x, $y) {
    return $x - $y;
};

$combine_2_and_3 = function ($fun) {
    return $fun(9, 3);
};

echo $combine_2_and_3($add) . "\n";


//combin str
$combine_names = function ($fun) {
    return $fun("Ankit", "Singh");
};

$append_with_space = function ($str_1, $str_2) {
    return $str_1 . " " . $str_2;
};

$government_form_notation = function ($str_1, $str_2) {
    return strtoupper($str_2) . ", " . strtoupper($str_1);
};

echo $combine_names($append_with_space) . "\n\n";
echo $combine_names($government_form_notation) . "\n\n";

//anonymous functions

echo $combine_names(function ($str_1, $str_2) {
    return strtoupper($str_1) . ", " . strtoupper($str_2);
}) . "\n";


?>
<?php

$divide = function ($x, $y) {
    // single responsibility principle: each piece of code should have only one responsility
    // therefore not verifying $y == 0 in this fn itself
    return $x / $y;
};

$second_arg_isnt_zero = function ($func) {
    return function (...$args) use ($func){
        if ($args[1] == 0) {
            echo "can't divide by zero";
            return null;
        }
        return $func(...$args);
    };
};


$divide_safe = $second_arg_isnt_zero($divide);
echo $divide_safe(10, 0) . "\n";


?>
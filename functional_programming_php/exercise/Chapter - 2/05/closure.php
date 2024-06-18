<?php
// closure property: when we return a function we make sure that it still has access to the scope it was returned from
// It's implemented using keyword "use"

$create_printer = function () {
    $my_fav_no = 42;
    return function () use ($my_fav_no) {
        echo "My favorite number is $my_fav_no\n";
    };
};


$my_printer = $create_printer();
$my_printer();
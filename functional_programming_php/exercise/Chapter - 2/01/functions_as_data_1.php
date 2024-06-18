<?php
// Ways of defining functions
function myFun(){
    echo "Hello\n";
}

$myFun = function ($name) {
    echo "functional programming by Mr.$name\n";
};

// myFun(); 
// $myFun2 = $myFun;
// $myFun2("Ankit");
// Ways of defining functions

// using functions in ternary operator
$environment = 'dev';
$fetch_data_real = function () {
    echo "Fetching data...\n";
};

$fetch_data_fake = function () {
    return [
        'name' => 'ANKIT SINGH',
        'age' => 22,
    ];
};


$fetch_data = (
    $environment === 'dv'
    ? $fetch_data_real()
    : $fetch_data_fake()
);

print_r($fetch_data);

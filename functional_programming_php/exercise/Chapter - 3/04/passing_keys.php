<?php

$letters = ['a', 'b', 'c', 'd', 'e'];
$numbers = [1, 2, 3, 4, 5];

$pairs = array_map(
    fn($letters, $numbers) => "$letters$numbers",
    $letters,
    $numbers,
);

print_r($pairs);

$pairs = array_map(
    fn($letters, $index) => "Letter at position $index is $letters",
    $letters,
    array_keys($letters),
);
print_r($pairs);
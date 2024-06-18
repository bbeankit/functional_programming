<?php
$get_property = function ($key, $default, $array) {
    if (array_key_exists($key, $array)) {
        return $array[$key];
    } else {
        return $default;
    }
};

$create_property_getter = fn($key, $default) =>
    # Your code goes here

    $get_favorite_color = $create_property_getter('favorite_color', 'none');

$person_1 = [
    'name' => 'Diana',
    'age' => 53,
    'job_title' => 'developer',
];

$person_2 = [
    'name' => 'Jim',
    'age' => 25,
    'job_title' => 'engineer',
    'favorite_color' => 'light green',
];

$person_1_favorite_color = $get_favorite_color($person_1);
$person_2_favorite_color = $get_favorite_color($person_2);

echo $person_1_favorite_color . "\n"; # should print 'none'
echo $person_2_favorite_color . "\n"; # should print 'light green'



//  The first challenge has to do with partial application. 
//  let's imagine that in a certain program we've created a function called get_property which we can use to get the value of a certain key from an array if we're not sure the array has that key and set a default value to return if it turns out the array doesn't have that key.
//  So for example if we have an array representing a person's data and we wanted to get the value of their favorite color key which they may or may not have we could say get_property favorite_color set a default value of none and call it on person.
//  And assign this to a variable like favorite_color. And this works. The problem with this though is that it's often more verbose than we need it to be. 
// For common properties that we might want to get from an array such as name, it's a bit of a pain to have to write out the whole function and pass in the key in default values over and over again since they'll almost always be the same. 
//  So wouldn't it be nice if we could simply partially apply these first two arguments and get a new, more specific function such as get_name that we could apply to an array.
//  Well as it happens, that's your challenge here. I've defined a function called create_property_getter and your job is to implement the body of this function such that the rest of the example code that I've written works correctly. 
// Namely, you'll want to partially apply the first two arguments, the key, and the default value. Also in an effort to make this challenge a little easier for you, you'll notice that I've started this new function as an arrow function.
// I'd recommend that you leave it this way to avoid having to use what I would consider to be an annoying amount of use statements to make it work. Well that's all the instructions.
// This challenge should take anywhere from five to 10 minutes or maybe even less. 
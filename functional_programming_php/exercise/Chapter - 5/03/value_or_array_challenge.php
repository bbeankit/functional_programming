<?php
# Should return an "enhanced version" of $func,
# such that func can be called on either a value
# or an array.
$call_on_value_or_array = function ($func) {
    # Your code goes here
};

$double = fn($x) => $x * 2;
$double_wrapped = $call_on_value_or_array($double);

$value = 4;
$doubled_value = $double_wrapped($value);

$array = [1, 2, 3, 4];
$doubled_array = $double_wrapped($array);

echo $doubled_value . "\n"; # Should print 8
print_r($doubled_array);    # Should print [2, 4, 6, 8]

?>
<p>
    <!-- 
    third functional programming challenge.
    challenge is called value or array and it goes like this. As you get deeper into functional programming, you may
    start to find that you're using array_map a lot. You've created a lot of nice functions, like double here, that work
    perfectly when you call them on a single value. But you find that you're working with a lot of arrays where you want
    to apply these functions to all the elements in the array. Normally if we want to apply a function to all the
    elements in an array, we need to use array_map. And there's nothing wrong with doing this, per se. But you might
    find that you're using array_map with a given function as often, or even more often, then you're using the function
    itself. Now you might remember back from a previous video about higher-order functions that we used first-class
    functions to wrap other functions. We created a safe version of a division function, for example, that prevented us
    from dividing by zero. So what if there was a way that we could create a version of functions like double such that
    we could either pass a single value to it and get that value doubled, or we could pass an array to it and get all
    the values in that array doubled without having to use map? Well there is a way to do this and your challenge is to
    find out how. You need to implement the body of this call_on_value_or_array function, such that the rest of the code
    that I've put here produces the expected results. And just as a hint, you might want to look back at the
    second_argument_isnt_zero function that we created earlier in the course and see if that helps you figure out what
    the basic structure of your implementation should be. Oh, and another hint is that if you're not already familiar
    with it, php has a built-in function called is_array that will tell you whether or not a given variable is an array.
    And that'll definitely come in handy for this challenge. This
    challenge should take between 10 and 15 minutes to complete.-->
</p>
<?php
    $all_votes = [
        'Harold', 'Jane', 'Harold', 'Ben', 'Jane', 'Jim',
        'Arnold', 'Arnold', 'Harold', 'Jane', 'Harold',
        'Ben', 'Arnold', 'Ben', 'Jane', 'Jane', 'Ben',
        'Harold', 'Harold', 'Ben', 'Steve',
    ];

    $tally_votes = function($votes) {
        # Your code goes here
    };

    print_r($tally_votes($all_votes));

    # Should print something like this:
    # [
    #   [Harold] => 6
    #   [Jane] => 5
    #   [Ben] => 5
    #   [Jim] => 1
    #   [Arnold] => 3
    #   [Steve] => 1
    # ]



?>

<!-- 
Challenge - tallying votes.
Let's imagine that a local election just took place and the results are contained in this array of names that we have here called all votes.
In order to find out who won, we have to tally the votes.
Your job is to complete this tally votes function so that it takes this array of votes and converts it into a string keyed array where each key is one of the candidate's names and the value of that key is how many votes that candidate got.
In other words, how many times the candidate's name occurred in the all votes array. Now before you get started, there are a few additional rules to this challenge. 
First of all, you're not allowed to use any kind of for loop to implement this function.
You have to do it using only the array functions we talked about in an earlier section. Or, if you want to really challenge yourself, you can use recursion, but I'm not going to go through that solution.
And just to give you a hint, you'll probably want to use array reduce for this one, as well as array merge.
The second rule is that you have to write this function as if you have no idea which names are in the array. 
We can obviously look and see which names are in the array but your implementation should be generic enough that it could be applied to any array of names that we might want to pass in. 
And last by not least, you're not allowed to use mutation of any kind in your implementation. Well, at least try your absolute hardest to avoid it. 
Well, that's all the rules. This challenge should take you about 10 to 15 minutes to complete. -->
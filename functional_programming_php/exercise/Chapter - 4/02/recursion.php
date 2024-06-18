<?php
// using regular fn syntx here instead of defining like a variable,
//  because fn defined like a variable can not call it self from inside a function body 
// and will give undefined variable error (it's behaviour of php)
function count_down($x)
{
    if ($x < 0) {
        echo "Blast off!";
        return;
    }
    echo $x . "...\n";
    count_down($x - 1);
}

function count_up($x, $max)
{
    if ($x > $max) {
        echo "Done!\n";
        return;
    }
    echo $x . "...\n";
    count_up($x + 1, $max);
}
;

count_down(10);
count_up(0, 10);
?>
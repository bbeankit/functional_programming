
<?php
    $call_on_value_or_array = function($func) {
        return function($data) use ($func) {
            if (is_array($data)) {
                return array_map($func, $data);
            }

            return $func($data);
        };
    };

    $double = fn($x) => $x * 2;
    $double_wrapped = $call_on_value_or_array($double);

    $value = 4;
    $doubled_value = $double_wrapped($value);

    $array = [1, 2, 3, 4];
    $doubled_array = $double_wrapped($array);

    echo $doubled_value . "\n"; # will print 8
    print_r($doubled_array);    # will print [2, 4, 6, 8]
?>
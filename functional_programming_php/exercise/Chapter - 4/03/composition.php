<?php
$people_data = [
    [
        'full_name' => 'Ed Johnson',
        'age' => 28,
        'height' => 72
    ],
    [
        'full_name' => 'Jeff Ruiz',
        'age' => 35,
        'height' => 65
    ],
    [
        'full_name' => 'Jane Price',
        'age' => 43,
        'height' => 60
    ]
];

$with_first_and_last_name = function ($person) {
    return array_merge(
        $person,
        [
            'first_name' => explode(' ', $person['full_name'])[0],
            'last_name' => explode(' ', $person['full_name'])[1],
        ]
    );
};
$height_inches_to_meters = function ($person) {
    return array_merge(
        $person,
        [
            'height' => $person['height'] * 0.0254,
        ]
    );
};

$add_initials = function ($person) {
    // $person['first_name'][0] - first letter of first_name
    // $person['last_name'][0] - first letter of last_name
    return array_merge(
        $person,
        [
            'initials' => $person['first_name'][0] . $person['last_name'][0],
        ],
    );
};

$compose = function (...$funcs) {
    return function ($data) use ($funcs) {
        foreach ($funcs as $func) {
            return array_reduce(
                // if I want fn be applied on data in reverse order of which they are passed than
                // I would do array_reverse($funcs) instead of $funcs
                $funcs,
                fn($carry, $func) => $func($carry),
                $data,
            );
        };
    };
};

$format_person = $compose(
    $with_first_and_last_name,
    $height_inches_to_meters,
    $add_initials,
);

$formatted_people = array_map($format_person,$people_data);

print_r($formatted_people);
    ?>
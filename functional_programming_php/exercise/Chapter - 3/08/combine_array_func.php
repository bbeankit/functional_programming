<?php
$employees = [
    [
        'name' => 'John',
        'age' => 43,
        'salary' => 90000,
        'job_title' => 'developer',
    ],
    [
        'name' => 'Hannah',
        'age' => 32,
        'salary' => 110000,
        'job_title' => 'developer',
    ],
    [
        'name' => 'Ralph',
        'age' => 22,
        'salary' => 35000,
        'job_title' => 'construction worker',
    ],
    [
        'name' => 'Rachel',
        'age' => 29,
        'salary' => 55000,
        'job_title' => 'digital marketing specialist',
    ]
];


$developers = array_filter($employees, fn($x) => $x['job_title'] == 'developer');
$developers_salaries = array_map(fn($x) => $x['salary'], $developers);

$total_developer_salaries = array_reduce(
    $developers_salaries,
    fn($carry, $item) => $carry + $item,
);

$average_developer_salary = $total_developer_salaries / count($developers_salaries);

// print_r($developers);
// print_r($developers_salaries);
// echo "$total_developer_salaries \n";


$non_developers = array_filter($employees, fn($x) => $x['job_title'] != 'developer');
$non_developers_salaries = array_map(fn($x) => $x['salary'], $non_developers);

$total_non_developers_salaries = array_reduce(
    $non_developers_salaries,
    fn($carry, $item) => $carry + $item,
);

$average_non_developer_salary = $total_non_developers_salaries / count($non_developers);
echo "Average Dev Salary: $average_developer_salary\n";
echo "Average non dev salary: $average_non_developer_salary";

?>
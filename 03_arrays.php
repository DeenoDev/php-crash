<?php
//Simple Array
$numbers = [1,44,55,22];
$fruits = array('apple', 'orange', 'pear');

// var_dump($numbers);
// echo $fruits[0];

//Associative Array
$colors = [
  1 => 'red',
  4 => 'blue',
  6 => 'green'
];

// echo $colors[4];

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

// echo $hex['blue'];

$person = [
    'first_name' => 'Deyano',
    'last_name' => 'Klaasen',
    'email' => 'deyano@gmail.com'
];

// echo $person['last_name'];

$people = [
    $person = [
        'first_name' => 'Deyano',
        'last_name' => 'Klaasen',
        'email' => 'deyano@gmail.com'
    ],
    $person = [
        'first_name' => 'Rachelle',
        'last_name' => 'Klaasen',
        'email' => 'rachelle@gmail.com'
    ],
    $person = [
        'first_name' => 'Neville',
        'last_name' => 'Klaasen',
        'email' => 'neville@gmail.com'
    ]
    
];

echo $people[2]['email'];
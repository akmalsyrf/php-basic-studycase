<?php

//1.union
$first = [
    "firstName" => "Nguyen Van A",
];

$last = [
    "firstName" => "Nguyen Van B",
    "lastName" => "Nguyen Van C",
];

$full = $first + $last;
// $full = $last + $first; //berbeda hasilnya
var_dump($full);

/**---------------------------------------------------- */

$a = [
    "firstName" => "Nguyen Van A",
    "lastName" => "Nguyen Van B",
];
$b = [
    "lastName" => "Nguyen Van B",
    "firstName" => "Nguyen Van A",

];
//2.equality
var_dump($a == $b);
//3.identity
var_dump($a === $b);
//4.inequality
var_dump($a != $b);
//5.non-identity
var_dump($a !== $b);
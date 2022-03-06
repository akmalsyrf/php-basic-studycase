<?php

$names = ["John", "Mary", "Peter", "Sally"];

foreach ($names as $name) {
    echo $name . PHP_EOL;
}

//foreach dengan key dan value
$person = [
    "name" => "John",
    "age" => 25,
];

foreach ($person as $key => $value) {
    echo $key . ": " . $value . PHP_EOL;
}
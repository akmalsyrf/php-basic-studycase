<?php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

var_dump(array_map(fn ($x) => $x * 2, $data)); //melakukan mapping (bukan map tipe data, tapi mapping seperti js)

rsort($data); //mengurutkan data terbalik
var_dump($data);


$arr = [
    'a' => 'red',
    'b' => 'green',
    'c' => 'blue',
    'd' => 'yellow',
];

var_dump(array_keys($arr)); //mengambil key dari array
var_dump(array_values($arr)); //mengambil value dari array
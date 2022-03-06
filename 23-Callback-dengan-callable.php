<?php

//lihat perbandingannya dengan studycase 22-Function.php bagian variable function
function convertName(string $name, callable $filter)
{
    // $finalName = $filter($name); //bisa juga seperti sebelumnya
    $finalName = call_user_func($filter, $name);
    echo $finalName . PHP_EOL;
}

convertName('Bang', 'strtoupper');
convertName('Bang', 'strtolower');
convertName('Bang', function (string $name) {return strtoupper($name);});
convertName('Bang', fn (string $name) => strtoupper($name));
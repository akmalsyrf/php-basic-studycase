<?php

//1. konkatenasi string
$name = "Rizky";
$age = 20;
echo "Nama saya $name" . " umur saya $age tahun" . PHP_EOL;

//2. Konversi tipe data
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"100.10";
var_dump($valueFloat);

//3.mengakses karakter string
$brando = "Dio";
echo $brando[0] . PHP_EOL;
echo $brando[1] . PHP_EOL;
echo "{$brando[2]}s" . PHP_EOL; //{} digunakan untuk mengambil nilai dari variabel
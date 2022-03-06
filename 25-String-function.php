<?php

$str = "   Hello World";
$arr = [1, 2, 3, 4, 5];

echo implode(", ", $arr) . PHP_EOL; //array menjadi string
var_dump(explode(" ", $str)) . PHP_EOL; //string menjadi array
echo strtolower($str) . PHP_EOL; //string menjadi lowercase
echo strtoupper($str) . PHP_EOL; //string menjadi uppercase
echo substr($str, 0, 5) . PHP_EOL; //string menjadi substring
echo trim($str) . PHP_EOL; //string menjadi trim
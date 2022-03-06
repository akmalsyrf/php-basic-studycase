<?php

//cara 1
$arr1 = array("foo", "bar", "baz", 1, 5.98, true);
// var_dump($arr1);


//cara 2
$arr2 = ["foo", "bar", "baz", 1, 5.98, true];
// var_dump($arr2);

/**---------------------------------------------- */

$array = array("foo", "bar", "baz", 1, 5.98, true);

//operasi array
//1. mengambil elemen array
echo $array[0]; //foo
//2. menambah data pada array di posisi paling belakang (push array kalo di javascript)
$array[] = "new"; //["foo", "bar", "baz", 1, 5.98, true, "new"]
//3. mengubah elemen array
$array[0] = "boo";
//4. menghapus elemen array
unset($array[0]);
//5.menghitung jumlah elemen array
echo count($array);


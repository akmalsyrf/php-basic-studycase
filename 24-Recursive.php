<?php

function factorial(int $n) : int {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}
var_dump(factorial(5));

//masalah dengan rekursif
// var_dump(factorial(3000000));

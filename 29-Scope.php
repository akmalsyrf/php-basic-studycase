<?php

//1.global scope
$name = 'Meliodas';

function sayName()
{
    echo $GLOBALS['name'] . PHP_EOL; //parsing global variable

    global $name; //parsing global variable
    echo $name . PHP_EOL;

    //2.local scope
    $name = 'Bang';
    echo $name . PHP_EOL;
}

sayName();

//3.static scope
function increment()
{
    // $count = 0;
    static $count = 0;
    echo $count . PHP_EOL;
    $count++;
}
increment();
increment();
increment();
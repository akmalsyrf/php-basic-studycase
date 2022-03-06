<?php

//1.Assign by reference
$name = 'Meliodas';

$othername = &$name;
$othername = 'Bang';

echo $name . PHP_EOL;

//2.Pass by reference
function increment(&$count)
{
    $count++;
}
$counter = 1;
increment($counter);
echo $counter . PHP_EOL;


//3.Returning references (asli emang ini bingungin)
function &getReference()
{
    static $value = 100;
    return $value;
}
$a = &getReference();
$a = 200;

$b = &getReference();
echo $b;

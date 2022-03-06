<?php

//1.basic function dan default arguments
function sayHello($name, $age = 0)
{
    echo "Hello $name ! and your age is $age years". PHP_EOL;
}

sayHello('Meliodas');


//2.type declaration untuk argument
//class / interfase, self, array, callable, bool, float, int, string, object, interable
function sum(int $a, int $b)
{
    return $a + $b;
}
echo sum(1, 2) . PHP_EOL;


//3. return type declaration
function sum2(int $a, int $b) : int
{
    return $a + $b;
}
var_dump(sum2(1, 2)) . PHP_EOL;


//4.variabel-length argument list
function sumAll(...$numbers)
{
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

echo sumAll(1, 2, 3, 4, 5) . PHP_EOL;
echo sumAll(...[1, 2, 3, 4, 5, 6, 7, 8, 9, 10]) . PHP_EOL;


//5.Variable function
//contoh simple
function foo($text)
{
    echo "foo " . $text . PHP_EOL;
}
$functionName = 'foo';
$functionName('meliodas');

//contoh penggunaan
function convertName(string $name, $filter)
{
    $finalName = $filter($name);
    echo $finalName . PHP_EOL;
}

convertName('Bang', 'strtoupper');
convertName('Bang', 'strtolower');


//6.Anonymous function == closure (beda dengan js)
$anonimFunc = function ($name) {
    echo "Hello $name" . PHP_EOL;
};
$anonimFunc('Meliodas');

//cara mengakses variabel global (karena secara default closure tidak bisa mengakses variabel global)
$captain = 'Meliodas';
$member = 'Bang';

$sayHelloNanatsu = function () use ($captain, $member) {
    echo "Hello $captain and $member" . PHP_EOL;
};
$sayHelloNanatsu();


//7.Arrow function
$sayHelloNanatsu2 = fn() => "Hello $captain and $member" . PHP_EOL; //bisa langsung mengakses variabel global (seperti function umumnya)
echo $sayHelloNanatsu2();
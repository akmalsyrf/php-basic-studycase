<?php


//1
goto a;
echo "Hello World!";

a:
echo "Hello A!". PHP_EOL;


//2
$counter = 1;

while (true) {
    echo $counter . PHP_EOL;
    $counter++;
    if ($counter > 5) {
        goto b;
    }
}

b : echo "Hello B!";
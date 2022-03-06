<?php

$counter = 1;

while($counter <= 10){
    echo "Hello " . $counter . PHP_EOL;
    $counter++;
}

while($counter <= 10):
    echo "Hello " . $counter . PHP_EOL;
    $counter++;
endwhile;


//do while
do{
    echo "Hello " . $counter . PHP_EOL;
    $counter++;
}while($counter <= 10);
<?php

$counter = 0;

//break
while(true) { // Infinite loop
    $counter++;
    if($counter == 10) {
        break;
    }
    echo 'Hello ' . $counter . PHP_EOL;
}

//continue
for($counter = 1; $counter <= 10; $counter++) {
    if($counter % 2 == 0) {
        continue;
    }
    echo 'Hello ' . $counter . PHP_EOL;
}
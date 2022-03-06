<?php

//infinite loop
// for(;;){
//     echo "Hello World";
// }

//init statement, kondisi, dan post statement bisa kosong bisa juga diisi

for($counter = 1; $counter <=10; $counter++){
    echo "Hello " . $counter . PHP_EOL;
}

for($counter = 1; $counter <=10; $counter++):
    echo "Hello " . $counter . PHP_EOL;
endfor;
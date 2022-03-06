<?php

$data = [
    'action'=> 'Create',
];

//tanpa nullish coalescing
if(isset($data['action'])){
    $action = $data['action'];
} else {
    $action = 'nothing';
}

echo $action .PHP_EOL;

//dengan nullish coalescing
$action = $data['action'] ?? 'nothing';

echo $action .PHP_EOL;
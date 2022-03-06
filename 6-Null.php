<?php

$name = "foo";
$name = null;
echo $name;

// unset($name); //hapus variable

var_dump(isset($name));
echo isset($name); //tidak muncul hasilnya di terminal
var_dump(is_null($name));
echo is_null($name);
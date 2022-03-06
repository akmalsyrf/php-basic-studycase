<?php

$nilai = 80;
$absen = 80;

//curly bracket
if($nilai >=80 && $absen >=80){
    echo "Nilai anda A";
} else if($nilai >=70 && $absen >=80){
    echo "Nilai anda B";
} else if($nilai >=60 && $absen >=80){
    echo "Nilai anda C";
} else if($nilai >=50 && $absen >=80){
    echo "Nilai anda D";
} else if($nilai >=40 && $absen >=80){
    echo "Nilai anda E";
} else {
    echo "Nilai anda F";
}

echo "\n";

//colon
if($nilai >=80 && $absen >=80):
    echo "Nilai anda A";
elseif($nilai >=70 && $absen >=80):
    echo "Nilai anda B";
elseif($nilai >=60 && $absen >=80):
    echo "Nilai anda C";
elseif($nilai >=50 && $absen >=80):
    echo "Nilai anda D";
elseif($nilai >=40 && $absen >=80):
    echo "Nilai anda E";
else:
    echo "Nilai anda F";
endif;
            
echo "\n";
//ternary
$gender = "Male";

$sayHi = $gender == "Male" ? "Hello bro" : "Hello ladies";
echo $sayHi;
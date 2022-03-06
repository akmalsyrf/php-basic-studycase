<?php
echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(0123);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b11111111);

echo "Underscore in number : ";
var_dump(12_345_678);

/*-------------------------------*/

echo "Floating point : ";
var_dump(1.234);

echo "Scientific notation plus (1.2 X 1000) : ";
var_dump(1.2e3);

echo "Scientific notation plus (7 X 0.001) : ";
var_dump(7e-3);

echo "Underscore in floating point : ";
var_dump(1_234.567);

/*-------------------------------*/

echo "Integer overflow 32 bit : ";
var_dump(2147483648);

echo "Integer overflow 64 bit : ";
var_dump(9223372036854775808);
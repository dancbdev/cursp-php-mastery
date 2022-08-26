<?php

// Inteiros (EX: 1, 2, 0,  -9,)

echo -511 . PHP_EOL;
echo 511 . PHP_EOL;

// Sistema Octal no PHP

echo 0777 . PHP_EOL; // retorna 511

// Sistema Hexadecimal

echo 0x1ff . PHP_EOL; // retorna 511

// Sistema Binário

echo 0b111111111 . PHP_EOL; // retorna 511

// Floats (Ex: -1.0, 0.0,  2.5)

echo 10.99 . PHP_EOL;

echo gettype(0) . PHP_EOL;
echo gettype (0.0) . PHP_EOL;
echo gettype(-2.5) . PHP_EOL;
echo gettype(-5) . PHP_EOL;
echo gettype(3) . PHP_EOL;

echo " Valor máximo do tipo Integer: " . PHP_INT_MIN . PHP_EOL;
echo " Valor mínimo do tipo Integer: " . PHP_INT_MAX . PHP_EOL;

echo " Valor máximo do tipo Float: " . PHP_FLOAT_MIN . PHP_EOL;
echo " Valor máximo do tipo Float: " . PHP_FLOAT_MAX . PHP_EOL;

echo 13.3e+2 . PHP_EOL;
echo 13.3e-2 . PHP_EOL;
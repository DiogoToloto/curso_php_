<?php



if (is_int(5)) {
    echo 'é um inteiro <br>';
}

if (is_int('isso é uma string')) {
    echo 'não é um inteiro 2<br>';
}

$n = 10;

if (is_int($n)) {
    echo 'é um inteiro 3<br>';
}
<?php

$caracteristica = [
    'nome' => 'Diogo',
    'idade' => 20,
    'biotipo' => 'Ectommorfo',
    'genero' => 'homen',
    'status' => 'Solteiro'
];

if ($caracteristica['idade'] >= 18) {
    echo 'Você é maior de idade';
} else {
    echo 'Você é menor de idade';
}
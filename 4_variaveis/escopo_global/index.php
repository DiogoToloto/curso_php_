<?php

$teste = "asd";

echo "$teste Global 1 <br>";

if(5 > 2) {
    $teste = "dsa";
    echo "$teste if <br>";
}

echo "$teste Global 2<br>";

function variavel() {
    $teste = "";
    echo "$teste Local<br>";
}

variavel();

function escopoGlobal() {
    global $teste;

    echo "$teste Global 3 Função";
}

escopoGlobal();
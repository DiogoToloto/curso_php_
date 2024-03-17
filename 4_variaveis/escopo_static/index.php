<?php

function teste() {
    $a = 0;
    $a++;

    echo "$a <br>";
}

teste();
teste();
teste();

function testeStatic() { // Com static a variavel recebe um valor sempre que a função é chamada
    static $a = 0;
    $a++;

    echo "$a <br>";
}

testeStatic();
testeStatic();
testeStatic();
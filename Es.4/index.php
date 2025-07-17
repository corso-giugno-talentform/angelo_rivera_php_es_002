<?php

$numeri = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$somma_pari = 0;

foreach ($numeri as $numero) {
    if ($numero % 2 == 0) {
        $somma_pari += $numero;
    };
};

echo ("La somma di tutti i numeri pari => $somma_pari");

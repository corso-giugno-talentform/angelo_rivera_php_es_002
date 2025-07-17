<?php
const Budget = 1000;

if (Budget <= 1000) {
    $valore_calcolato = round(Budget / 3, 2);
    echo ("Paga in 3 comode rate da: $valore_calcolato");
};

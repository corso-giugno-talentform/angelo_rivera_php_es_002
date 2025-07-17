<?php
$annoatt = 2025;
$nascita = 1998;
$eta = $annoatt - $nascita;

if ($eta >= 4) {
    echo ("Il nostro sistema ha calcolato che hai: Hai $eta anni.");
} elseif ($eta >= 0 && $eta <= 3) {
    echo ('Troppo piccolo per scrivere a macchina.');
} else {
    echo ('Il numero da te inserito non può essere elaborato.');
};

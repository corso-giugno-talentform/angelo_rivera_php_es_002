<?php

$ordinazione = 'Panino';

switch ($ordinazione) {
    case 'Pizza':
        $prezzo = 6;
        echo ("Hai ordinato Pizza con un costo di $prezzo Euro");
        break;
    case 'Birra':
        $prezzo = 3;
        echo ("Hai ordinato Birra con un costo di $prezzo Euro");
        break;
    case 'Panino':
        $prezzo = 8;
        echo ("Hai ordinato Panino con un costo di $prezzo Euro");
        break;
    case 'Dessert':
        $prezzo = 3;
        echo ("Hai ordinato Dessert con un costo di $prezzo Euro");
        break;
    default:
        echo ("Non Disponibile");
        break;
};

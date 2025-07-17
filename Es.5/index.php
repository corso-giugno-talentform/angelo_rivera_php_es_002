<?php

for ($i = 1; $i <= 30; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo ('Francesco' . "\n\n");
    } else if ($i % 3 === 0) {
        echo ('PHP' . "\n\n");
    } else if ($i % 5 === 0) {
        echo ('JAVASCRIPT' . "\n\n");
    } else {
        echo ('Numero => ' . $i . "\n\n");
    };
};

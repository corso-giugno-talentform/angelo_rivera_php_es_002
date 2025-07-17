<?php
$arrays = [
    [
        'name' => 'Marco',
        'gender' => 'M',
    ],
    [
        'name' => 'Vanessa',
        'gender' => 'F',
    ],
    [
        'name' => 'Jack',
        'gender' => 'M',
    ],
    [
        'name' => 'Mari*',
        'gender' => '',
    ],
];

foreach ($arrays as $person) {
    if ($person['gender'] == 'M') {
        echo ('Buongiorno Sig. ' . $person['name'] . ".\n");
    } else if ($person['gender'] == 'F') {
        echo ('Buongiorno Sig.ra ' . $person['name'] . ".\n");
    } else {
        echo ($person['name'] . ' ha preferito non specificare.');
    }
};

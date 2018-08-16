<?php

$data = [
    [
        'title' => 'Do stuff',
        'details' => 'Do all the stuff'
    ],
    [
        'title' => 'Go to the store',
        'details' => 'Buy stuff at the store '
    ]
];

$output = json_encode($data);

print $output;

?>
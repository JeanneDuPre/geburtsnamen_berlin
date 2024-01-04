<?php

$names = [];

$file = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'geburtsnamen_berlin_filtered.csv', 'r');

while (($line = fgetcsv($file))) {

    // Skip first line (Header of CSV file)
    if ($line[0] === 'vorname') continue;

    $names[] = [
        'vorname' => $line[0],
        'jahr' => intval($line[1], 10),
        'anzahl' => intval($line[3], 10)
    ];
}
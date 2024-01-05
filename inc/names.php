<?php

$names = [];

$file = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'geburtsnamen_berlin_vorname_anzahl_jahr.csv', 'r');

while (($line = fgetcsv($file))) {

    // Skip first line (Header of CSV file)
    if ($line[0] === '') continue;

    $names[] = [
        'vorname' => $line[1],
        'jahr' => intval($line[3], 10),
        'anzahl' => intval($line[2], 10)
    ];
}
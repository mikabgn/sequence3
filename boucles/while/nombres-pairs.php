<?php

$nombre = 0;
$nombre2 = readline("choisir un nombre : ");
while($nombre <= $nombre2) {
    if ($nombre % 2 == 0) {
        echo "$nombre ";
        $somme = $somme + $nombre;
    }
    $nombre = $nombre + 1;
}
echo PHP_EOL;
echo "la somme des nombres pairs est $somme\n";

<?php

$note=readline("choisir une note : ");

while( 0 > $note || $note > 20 ) {
    echo "la note saisie est incorrect\n";
    $note=readline("choisir une note : ");
}
echo "la note saisie est correct ";
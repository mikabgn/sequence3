<?php

$phrase = readline("Saisir une phrase : ");
//$voyelles = "aeiouy";

$nbvoyelles = 0;
$nbconsonnes = 0;
$nombre = 0;
$offset = -1;

$nbLettres = strlen($phrase);

while ($nombre < $nbLettres) {
    $lettre = substr($phrase,  $offset + 1, 1);
    if (strtoupper($lettre)=="A"||strtoupper($lettre)=="E"||strtoupper($lettre)=="I"||strtoupper($lettre)=="O"||strtoupper($lettre)=="U"||strtoupper($lettre)=="Y"){
        $nbvoyelles = $nbvoyelles + 1;
    } elseif (strtoupper($lettre)==(strtoupper($lettre)=="Z"||strtoupper($lettre)=="R"||strtoupper($lettre)=="T"||strtoupper($lettre)=="P"||strtoupper($lettre)=="M"||strtoupper($lettre)=="L"||strtoupper($lettre)=="K"||strtoupper($lettre)=="J"||strtoupper($lettre)=="H"||strtoupper($lettre)=="N"||strtoupper($lettre)=="B"||strtoupper($lettre)=="G"||strtoupper($lettre)=="F"||strtoupper($lettre)=="V"||strtoupper($lettre)=="D"||strtoupper($lettre)=="C"||strtoupper($lettre)=="S"||strtoupper($lettre)=="X"||strtoupper($lettre)=="Q"||strtoupper($lettre)=="W") ){
        $nbconsonnes += 1;
    }
    $offset += 1;
    $nombre = $nombre +1;
}
echo "IL y a $nbvoyelles voyelles et $nbconsonnes consonnes ";
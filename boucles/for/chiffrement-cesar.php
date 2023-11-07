<?php

$chaineAChiffer = readline("Entrez une chaine à chiffrer : ");
$decalage = readline("Entrez un décalage : ");

$resultat = "";

for ($i = 0; $i < strlen($chaineAChiffer); $i++) {
    // Rechercher le caractère à la position $i dans la chaine à chiffrer
    $char = substr($chaineAChiffer, $i, 1);
    // Si le caractère est une lettre
    if (ctype_alpha($char)) {
        // Convertir le caractère en nombre ASCII
        $ascii = ord($char);

        // Décaler le nombre ASCII
        $asciiDecale = $ascii + $decalage;

        // Déterminer si la lettre est en majuscule
        $estEnMajuscule = ctype_upper($char);
        if ($estEnMajuscule) {
            // et si le décalage la fait dépasser 'Z'
            if ($asciiDecale > ord('Z')) {
                $asciiDecale -= 26;
            }
        } // Si la lettre est en minuscule
        else {
            // ...et si le décalage la fait dépasser 'z'
            if ($asciiDecale > ord('z')) {
                $asciiDecale -= 26;
            }
        }

        // Convertir le nombre ASCII décalé en caractère
        $resultat .= chr($asciiDecale);
    } // Si le caractère n'est pas une lettre, ajouter tel quel
    else {
        $resultat .= $char;
    }
}

echo "Texte original : " . $chaineAChiffer . PHP_EOL;
echo "Texte chiffré : " . $resultat . PHP_EOL;



//<?php
//$phrase=readline("entrer une chaîne de caractére : ");
//$decalage=readline("entrer le decalage du chiffrement : ");
//$offset=0;
//$alphabet="abcdefghijklmnopqrstuvwxyz";
//for ($nbLettre = strlen ($phrase) ; $offset < $nbLettre ; $offset = $offset + 1 ){
//$lettre = substr ( $phrase , $offset , 1);
//if ( ctype_alpha ( $lettre ) ) {
//$numLettre = strpos ( $alphabet , $lettre );
//if ( $numLettre + $decalage > 25 ){
//$numLettre = $numLettre - 26 ;
//}
//$lettreCoder = substr($alphabet , $numLettre + $decalage ,  1 )
//echo "$lettreCoder";
//}
//elseif ( $lettre==" ") {
//echo " " ;
//}
//}

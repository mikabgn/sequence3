<?php
echo "Choix de boisson : \n";
echo "1- Eau 1.20€ \n";
echo "2- Soda 3€ \n";
echo "3- Café 2€ \n";
$payez=0;
$choix=readline("Veuillez choisire votre boisson (1,2 ou 3) : ");
while($choix!=1&&$choix!=2&&$choix!=3) {
    echo"Erreur mauvaise saisie choisisez 1,2 ou 3 \n";
    $choix=readline("Veuillez choisire votre boisson : ");
}
if ($choix==1) {
    $prix=1.20;
    echo("Veuillez insérer de l'argent");

    while ($prix>0){
        $payez=readline("Il vous reste à payez $prix"."0€ : ");
        $prix=$prix-$payez;
    }
} elseif ($choix==2) {
    $prix=3;
    echo("Veuillez insérer de l'argent");

    while ($prix>0){
        $payez=readline("Il vous reste à payez $prix"."€ : ");
        $prix=$prix-$payez;
    }
} elseif ($choix==3) {
    $prix=2;
    echo("Veuillez insérer de l'argent");

    while ($prix>0){
        $payez=readline("Il vous reste à payez $prix"."€ : ");
        $prix=$prix-$payez;
    }
}

if ($prix<0) {
echo "Voici votre monnaie : ".round(-$prix,2)."€\n";
echo "Voicie votre boisson. Merci !";
} else {
    echo "Voicie votre boisson. Merci !";
}
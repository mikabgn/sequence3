<?php
$total = 0;
$random = random_int(0,1000);
$prediction = readline("saisir une prédiction entre 0 et 1000 : ");
while (1000 < $prediction || $prediction < 0) {
    $prediction=readline("ERREUR : saisir une prédiction entre 0 et 1000 ! : ");
}
while(($random != $prediction && $total <= 200)) {
    $total = $total + 1;
    $random = random_int(0, 1000);
}

if ($total>200) {
    echo "Tu n'as pas deviner en moins de 200 coups";
} else {
    echo "Le nombre à deviner a été trouver en $total coups";
}
<?php

$motDePasse = readline("Saisir votre mot de passe : ");
$nbLettres=strlen($motDePasse);

$chiffres = "0123456789";
$nombre=0;
$offset = -1;
$taille=False;
$min=False;
$Maj=False;
$chiffre=False;

while ($nombre<=$nbLettres){
    $lettre = substr($motDePasse,  $offset + 1, 1);
    if ($nbLettres>=8) {
        $taille=True;
    }
    if (ctype_lower(substr($motDePasse,  $offset + 1, 1))){
        $min=True;
    }
    if (ctype_upper(substr($motDePasse,  $offset + 1, 1))) {
        $Maj=True;
    }
    if (strpos($chiffres, substr($motDePasse,  $offset + 1, 1))) {
        $chiffre=True;
    }

    $offset += 1;
    $nombre = $nombre +1;
}

if (($chiffre==True)&&($Maj==True)&&($min==True)&&($taille==True)) {
echo "le mot de passe est valide";
} else {
    echo "le mot de passe est invalide";
}







//echo "Mot de passe valide";
//echo "Le mot de passe doit contenir au moin une Majuscule\n";
//$motDePasse = readline("Saisir votre mot de passe : ");
//echo "Le mot de passe doit contenir au moin un Chiffre 1\n";
//$motDePasse = readline("Saisir votre mot de passe : ");
//echo "Le mot de passe doit contenir au moin une Minuscule\n";
//$motDePasse = readline("Saisir votre mot de passe : ");
//echo "Le mot de passe doit contenir au moin 8 caractéres\n";
//$motDePasse = readline("Saisir votre mot de passe : ");
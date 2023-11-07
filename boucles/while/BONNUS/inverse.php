<?php
$phrase=readline("saisir une phrase : ");
$nbLettres=strlen($phrase);
$nombre=0;
$offset=0;
while($nombre<$nbLettres){
    echo substr($phrase,$offset-1,1);
    $nombre=$nombre+1;
    $offset=$offset-1;
}
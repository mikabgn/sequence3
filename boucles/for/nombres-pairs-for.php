<?php
$nombreChoisie=readline("choisiser un nombre : ");
for($nombre=0;$nombre<=$nombreChoisie;$nombre+=1) {
    if ($nombre%2==0) {
        echo"$nombre ";
    }
}
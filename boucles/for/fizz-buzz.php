<?php

for($nombre = 1; $nombre <= 30;$nombre += 1){
    if ($nombre % 15 == 0) {
        echo "FizzFuzz ";
    } elseif ($nombre % 5 == 0) {
        echo "Buzz ";
    } elseif ($nombre % 3 == 0) {
        echo "Fizz ";
    } else {
        echo "$nombre ";
    }
}

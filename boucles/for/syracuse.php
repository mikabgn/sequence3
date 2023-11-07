<?php
$n = 15;
$n2 = $n;
for( $r = 15 ; $r < $n2 + 20 ; $r += 1 ){
    echo "$n ";
    if ($n % 2 == 0) {
        $n = $n/2;
    } else {
        $n = $n * 3 + 1;
    }
}
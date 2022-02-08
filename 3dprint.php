<?php
/*
 * Kattis problem: https://open.kattis.com/problems/3dprinter
 * Author: Max Malmer, maxmalmer@live.se
 */

$stdin = fopen("php://stdin", "r");
fscanf($stdin, "%[^\n]", $array);
$array = array_map("intval", explode(' ', $array));
$n_printers = $array[0];

if ($n_printers == 1) {
    echo 1;
} else {
    $n_days = 0;
    $exp = 2;

    while ($n_printers < $n) {
        $n_possible_printers = pow(2, $exp - 2);

        if ($n_possible_printers >= $n_printers) {
            break;
        } else {
            $n_days++;
            $exp++;
        }
    }

    echo $n_days;
}
?>
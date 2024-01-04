<?php
function faktorial($a) {
    if ($a <= 1) {
        return 1; // Basis kasus: 0! dan 1! sama dengan 1
    } else {
        return $a * faktorial($a - 1); // Rekursif
    }
}

$hasil = faktorial(5);
echo "Faktorial dari 5 adalah $hasil"; // Output: Faktorial dari 5 adalah 120
?>
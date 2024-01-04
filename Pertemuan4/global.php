<?php

$nama = "Khoirun najwa"; /*variabel global */

function haloDunia () {
    $nama = "Khoirun najwa"; # variabel Lokal
    echo $nama . '<br>'; # khoirun najwa
}

haloDunia();

echo $nama; # Khoirun najwa
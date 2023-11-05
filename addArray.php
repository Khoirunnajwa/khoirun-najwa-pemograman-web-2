<?php

$hari = ["Senin", "Selasa"];

print_r($hari);
echo "</br>";
$hari[]= "Rabu"; //menambah elemen pada urutan terakhir array
print_r($hari);
echo "</br>";
$hari[3] = "Kamis"; //menambah elemen pada index yang kita tentukan.
                    //jika index sudah terisi, maka elemen lama akan 
                    //diganti dengan elemen yang baru.

print_r($hari);

?>
<?php
$jawabanIsset = "Isset adalah= sebuah fungsi dalam PHP yang digunakan untuk memeriksa apakah suatu variabel telah dideklarasikan (ada) dan memiliki nilai yang tidak NULL.<br></br>";

$jawabanEmpty = "Empty adalah= sebuah fungsi dalam PHP yang digunakan untuk memeriksa apakah suatu variabel ada dan memiliki nilai yang dianggap 'kosong'. Variabel dianggap kosong jika nilainya adalah sebuah string kosong <br>
 <br></br>";

function soal($style) {
    global $jawabanIsset, $jawabanEmpty;

    if ($style == 'isset') {
        echo $jawabanIsset;
    } if ($style == 'empty') {
        echo $jawabanEmpty;
    } else {
       ;
    }
}



    soal('empty');
    soal('isset');
    ?>
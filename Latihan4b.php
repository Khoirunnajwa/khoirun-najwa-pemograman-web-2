<?php
// Membuat array dengan 5 negara di ASEAN
$negara_asean = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];

// Menampilkan array awal sebagai daftar HTML
echo "<h2>DAFTAR NEGARA ASEAN awal:</h2>";
echo "<ul>";
foreach ($negara_asean as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";

// Menambahkan 3 negara ke dalam array
$negara_asean[] = "Laos";
$negara_asean[] = "Filipina";
$negara_asean[] = "Kamboja";

// Menampilkan array setelah penambahan
echo "<h2>DAFTAR NEGARA ASEAN baru:</h2>";
echo "<ul>";
foreach ($negara_asean as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";
?>

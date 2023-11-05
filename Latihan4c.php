<?php
// Membuat associative array dengan nama negara di ASEAN beserta ibukotanya
$negara_ibukota = [
    "Indonesia" => "DKI Jakarta",
    "Singapura" => "Singapura",
    "Malaysia" => "Kuala Lumpur",
    "Brunei" => "BandarSeriBegawan",
    "Thailand" => "Bangkok",
    "Laos" => "Vientiane",
    "Filipina" => "Manila",
    "Myanmar" => "Naypyidaw",
    
];

// Menampilkan daftar negara ASEAN dan ibukotanya
echo "<h2>Daftar Negara ASEAN dan Ibukotanya:</h2>";
echo "<ul>";
foreach ($negara_ibukota as $negara => $ibukota) {
    echo "<li>$negara : $ibukota</li>";
}
echo "</ul>";
?>

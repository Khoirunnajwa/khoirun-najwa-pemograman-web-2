<?php
// Membuat array multidimensi dengan nama kota, makanan khas, dan harga
$negara_info = [
    "Indonesia" => ["DKI Jakarta", "Nasi Goreng", "+62"],
    "Singapura" => ["Singapura", "Hainanese Chicken Rice", "+65"],
    "Malaysia" => ["Kuala Lumpur", "Nasi Lemak", "+60"],
    "Brunei" => ["Bandar Seri Begawan", "Ambuyat", "+673"],
    "Thailand" => ["Bangkok", "Pad Thai", "+66"],
    "Laos" => ["Vientiane", "Laap", "+856"],
    "Filipina" => ["Manila", "Adobo", "+63"],
    "Myanmar" => ["Naypyidaw", "Mohinga", "+95"]
];

// Menampilkan isi array secara terurut menggunakan tabel HTML
echo "<h2>Informasi Negara ASEAN:</h2>";
echo "<table border='1'>";
echo "<tr><th>Negara</th><th>Ibu Kota</th><th>Makanan Khas</th><th>Kode Telpon</th></tr>";

foreach ($negara_info as $negara => $info) {
    echo "<tr>";
    echo "<td>$negara</td>";
    foreach ($info as $detail) {
        echo "<td>$detail</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>

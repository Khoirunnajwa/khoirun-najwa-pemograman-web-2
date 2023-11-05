<?php
// Membuat associative array dengan data entitas
$data_entitas = [
    "Nrp 5" => [
        "Nama" => "KHOIRUN NAJWA",
        "NRP" => "109%5 =5",
        "Kategori" => "Perusahaan Teknologi",
        "Deskripsi" => "Apple Inc. adalah perusahaan multinasional Amerika yang berkantor pusat di Cupertino, California, yang merancang, mengembangkan, dan menjual elektronik konsumen, perangkat lunak komputer, dan layanan internet. Perusahaan ini didirikan pada tahun 1976 oleh Steve Jobs, Steve Wozniak, dan Ronald Wayne.",
        "Gambar" => "Perusahaan teknologi.jpg"
    ],
];

// Menampilkan data dalam tabel HTML
echo "<style>
    table {
        width: 100%;
    }
    th, td {
        padding: 5px;
    }
    img {
        max-width: 100px; 
        max-height: 100px; 
    }
</style>";

echo "<h2>Data Entitas:</h2>";
echo "<table border='1'>";
echo "<tr><th>Nama</th><th>NRP</th><th>Kategori</th><th>Deskripsi</th><th>Gambar</th></tr>";

foreach ($data_entitas as $entitas) {
    echo "<tr>";
    echo "<td>{$entitas['Nama']}</td>";
    echo "<td>{$entitas['NRP']}</td>";
    echo "<td>{$entitas['Kategori']}</td>";
    echo "<td>{$entitas['Deskripsi']}</td>";
    echo "<td><img src='{$entitas['Gambar']}' alt='Gambar Entitas'></td>";
    echo "</tr>";
}

echo "</table>";
?>
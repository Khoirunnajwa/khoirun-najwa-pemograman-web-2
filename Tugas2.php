<?php
// Membuat associative array dengan data entitas
$data_entitas = [];


for ($i = 1; $i <= 10; $i++) {
    $data_entitas["$i"] = [
        "Nama" => "Khoirun Najwa",
        "NRP" => "109",
        "Kategori" => "Perusahaan Teknologi",
        "Deskripsi" => "Apple Inc. adalah perusahaan multinasional Amerika yang berkantor pusat di Cupertino, California, yang merancang, mengembangkan, dan menjual elektronik konsumen,
        perangkat lunak komputer, dan layanan internet. Perusahaan ini didirikan pada tahun 1976 oleh Steve Jobs, Steve Wozniak, dan Ronald Wayne.",
        "Gambar" => "Perusahaan teknologi.jpg" 
    ];
   
$data_entitas[1]["Gambar"] = 'google.png';
$data_entitas[2]["Gambar"] = 'Microsoft Azure.jpg';
$data_entitas[3]["Gambar"] = 'Perusahaan teknologi.jpg';
$data_entitas[4]["Gambar"] = 'Amazon.jpeg';
$data_entitas[5]["Gambar"] ='facebook.png';
$data_entitas[6]["Gambar"] ='tesla.png';
$data_entitas[7]["Gambar"] ='IBM.jpeg';
$data_entitas[8]["Gambar"] ='intel.png';
$data_entitas[9]["Gambar"] ='oracle.jpg';
$data_entitas[10]["Gambar"] ='cisco.png';



$data_entitas[1]["Deskripsi"] = 'Apple Inc. adalah perusahaan multinasional Amerika yang berkantor pusat di Cupertino, California, yang merancang, mengembangkan, dan menjual elektronik konsumen,
perangkat lunak komputer, dan layanan internet. Perusahaan ini didirikan pada tahun 1976 oleh Steve Jobs, Steve Wozniak, dan Ronald Wayne.';
$data_entitas[2]["Deskripsi"] ='Microsoft adalah perusahaan teknologi multinasional yang terkenal dengan sistem operasi Windows, Office Suite, dan layanan komputasi awan Azure.';
$data_entitas[3]["Deskripsi"] ='Google adalah perusahaan teknologi yang dikenal sebagai mesin pencari terbesar di dunia. Mereka juga mengembangkan Android, sistem operasi mobile yang populer, dan berbagai layanan online.';
$data_entitas[4]["Deskripsi"] ='Amazon adalah perusahaan teknologi dan perdagangan elektronik terbesar di dunia. Mereka mengoperasikan layanan komputasi awan, Amazon Web Services (AWS), serta bisnis e-commerce.';
$data_entitas[5]["Deskripsi"] ='Facebook adalah perusahaan media sosial yang juga memiliki WhatsApp dan Instagram. Mereka fokus pada konektivitas dan berbagi informasi.';
$data_entitas[6]["Deskripsi"] ='Tesla adalah produsen mobil listrik yang terkenal dengan inovasi dalam teknologi kendaraan listrik dan otonom.';
$data_entitas[7]["Deskripsi"] ='IBM adalah perusahaan teknologi yang mengkhususkan diri dalam komputasi bisnis, perangkat keras, dan layanan konsultasi.';
$data_entitas[8]["Deskripsi"] ='Intel adalah perusahaan teknologi yang terkenal dengan mikroprosesor komputer. Produk mereka digunakan di berbagai perangkat elektronik.';
$data_entitas[9]["Deskripsi"] ='Oracle adalah perusahaan perangkat lunak yang dikenal dengan basis data dan solusi perangkat lunak bisnis.';
$data_entitas[10]["Deskripsi"] ='Cisco adalah perusahaan teknologi yang mengkhususkan diri dalam jaringan dan komunikasi. Mereka memproduksi perangkat keras jaringan dan menyediakan layanan jaringan.';

}


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
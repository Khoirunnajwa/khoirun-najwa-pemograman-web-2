<?php
    // Tanggal transaksi
$tanggalTransaksi = "20 Nov 2023";

// Data produk multidimensi
$produk = array(
    array("nama" => "Baju Bayi", "harga" => 35500, "jumlah" => 3),
    array("nama" => "Diapers", "harga" => 51000, "jumlah" => 5),
    array("nama" => "Bedak", "harga" => 15000, "jumlah" => 1),
    array("nama" => "Minyak Telon", "harga" => 30000, "jumlah" => 2),
    array("nama" => "Baby Oil", "harga" => 16000, "jumlah" => 3)
);

// Menghitung total pembelian
$totalPembelian = 0;

foreach ($produk as $item) {
    $totalPembelian += $item['harga'] * $item['jumlah'];
}

// Inisialisasi diskon
$diskon = 0;

// Menghitung diskon berdasarkan total pembelian
if ($totalPembelian >= 300) {
    $diskon = 0.2; // Diskon 20% jika total pembelian >= 300
} elseif ($totalPembelian >= 200) {
    $diskon = 0.1; // Diskon 10% jika total pembelian >= 200
}

// Menghitung total setelah diskon
$totalSetelahDiskon = $totalPembelian - ($totalPembelian * $diskon);

// Menampilkan informasi transaksi
echo "<h2>Informasi Transaksi</h2>";
echo "<p>Tanggal Transaksi: $tanggalTransaksi</p>";
echo "<h3>Produk:</h3>";

echo "<ul>";
foreach ($produk as $item) {
    $namaProduk = $item['nama'];
    $harga = $item['harga'];
    $jumlah = $item['jumlah'];
    echo "<li>$namaProduk ($jumlah X " . number_format($harga, 0, ",", ".") . ")</li>";
}
echo "</ul>";

echo "<p>Total : Rp " . number_format($totalPembelian, 0, ",", ".") . "</p>";
echo "<p>Diskon: " . ($diskon * 100) . "%</p>";
echo "<p>Total pembayaran: Rp " . number_format($totalSetelahDiskon, 0, ",", ".") . "</p>";

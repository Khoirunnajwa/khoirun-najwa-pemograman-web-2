<?php
// Data produk
$produk = array(
    array("Minyak Telon", 20, 30000),
    array("Diapres", 25, 51000),
    array("Baby Oil", 15, 16000),
    array("Shampo Baby", 20, 20000),
    array("Bedak", 15, 15000),
    array("Baju Bayi", 20, 35000),
    array("Jumper", 25, 50000)
);

// Menghitung total pembelian
$totalPembelian = 0;

foreach ($produk as $item) {
    $totalPembelian += $item[1] * $item[2];
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
echo "<table border='1' cellpadding='8'>";
echo "<tr><th>Produk</th><th>Stok</th><th>Harga</th><th>Total</th></tr>";

foreach ($produk as $item) {
    $produkNama = $item[0];
    $stok = $item[1];
    $harga = $item[2];
    $total = $stok * $harga;

    echo "<tr><td>$produkNama</td><td>$stok</td><td>Rp " . number_format($harga, 0, ",", ".") . "</td><td>Rp " . number_format($total, 0, ",", ".") . "</td></tr>";
}

echo "<tr><td colspan='3'><strong>Total Pembelian</strong></td><td><strong>Rp " . number_format($totalPembelian, 0, ",", ".") . "</strong></td></tr>";
echo "<tr><td colspan='3'><strong>Diskon (" . ($diskon * 100) . "%)</strong></td><td><strong>Rp " . number_format($totalPembelian * $diskon, 0, ",", ".") . "</strong></td></tr>";
echo "<tr><td colspan='3'><strong>Total Pembayaran</strong></td><td><strong>Rp " . number_format($totalSetelahDiskon, 0, ",", ".") . "</strong></td></tr>";

echo "</table>";
?>

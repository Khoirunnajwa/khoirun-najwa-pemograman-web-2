<!DOCTYPE html>
<html>
<head>
    <title>Tabel Harga Barang</title>
</head>
<body>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Produk</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Jumlah</th>
    </tr>
    <?php
    // Data barang
    $dataBarang = array(
        array("Minyak Telon", 20, 30000),
        array("Diapres", 25, 51000),
        array("Baby Oil", 15, 16000),
        array("Shampo Baby", 20, 20000),
        array("Bedak", 15, 15000),
        array("Baju Bayi", 20, 35000),
        array("Jumper", 25, 50000)
    );

    // Menampilkan data barang dan menghitung total
    $totalHargaSemua = 0;

    for ($i = 0; $i < count($dataBarang); $i++) {
        $id = $i + 1;
        $produk = $dataBarang[$i][0];
        $stok = $dataBarang[$i][1];
        $harga = $dataBarang[$i][2];

        $total = $stok * $harga;
        $totalHargaSemua += $total;

        echo "<tr>";
        echo "<td>$id</td>";
        echo "<td>$produk</td>";
        echo "<td>$stok</td>";
        echo "<td>Rp " . number_format($harga, 0, ",", ".") . "</td>";
        echo "<td>Rp " . number_format($total, 0, ",", ".") . "</td>";
        echo "</tr>";
    }
    ?>
    <tr>
        <td colspan="4" style="text-align: right;"><strong>Total Harga Semua Barang:</strong></td>
        <td><strong>Rp <?php echo number_format($totalHargaSemua, 0, ",", "."); ?></strong></td>
    </tr>
</table>

</body>
</html>

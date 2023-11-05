<?php

$lyrics = [
    "001" => "Balonku ada lima",
    "002" => "Rupa-rupa warna-nya",
    "003" => "<span style='color: green;'>hijau</span>, <span style='color: yellow;'>kuning</span>, <span style='color: gray;'>kelabu</span>, <span style='color: red;'>merah muda</span>, dan <span style='color: blue;'>biru</span",
    "004" => "Meletus balon hijau DOR!!!",
    "005" => "Hatiku sangat kacau"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>warna</title>
</head>
<body>
<?php
foreach ($lyrics as $balon) { // Perulangan akan otomatis menampilkan semua isi array
  echo "<p>$balon</p>";
}
?>
</body>
</html>
<?php

$nama = ["Ahmad", "Budi", "Chika", "Dhini", "Erwin"];

?>

<!DOCTYPE html>
<html larg="en">
<head>
    <meta charset="UTF-8">
    <title>Looping for array</title>
</head>
<body>
    <?php

      foreach ($nama as $absen) { //Foreach  akan otomatis menampilkan semua isi array
        echo "<li>$absen</li>";
      }

      ?>

    </body>
    </html>

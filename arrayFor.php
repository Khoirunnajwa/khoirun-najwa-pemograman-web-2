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

      for ($i = 0; $i < count($nama); $i++) {
         


        echo "<li>$nama[$i]</li>";
      }

      ?>

    </body>
    </html>

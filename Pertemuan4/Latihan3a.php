<!DOCTYPE html>
<html>
<head>
    <title>Hello world</title>
    <style>
        .highlight {
            color: #1A0547;
            font-weight: bold;
            font-style: italic;
            text:28px
        }
    </style>
</head>
<body>
    <?php
    function ubahStyle($string, $kelasCSS) {
        
        return '<span class="' . $kelasCSS . '">' . $string . '</span>';
    }

    // Mengisi variabel
    $text = "Hello World! Here I come!";
    $cssClass = "highlight"; 

    // Memanggil fungsi dan mencetak hasilnya
    $styledText = ubahStyle($text, $cssClass);
    echo $styledText;
    ?>
</body>
</html>




 
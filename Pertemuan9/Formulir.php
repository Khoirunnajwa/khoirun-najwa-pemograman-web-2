<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran</title>
</head>
<body>

<h2 align="center">Formulir Pendaftaran</h2>

<table border="1" align="center">
    <tr>
        <td colspan="2">
            <form method="post" action="" enctype="multipart/form-data">
                <?php

                require_once "./koneksi.php";

                $fields = [
                    "ID Mahasiswa" => "id_mahasiswa",
                    "Nama" => "nama",
                    "Alamat" => "alamat",
                    "Jenis Kelamin" => [
                        "jk" => [
                            "Pria" => "pria",
                            "Wanita" => "wanita"
                        ],
                        
                    ],
                    "Tanggal Lahir" => "tanggal_lahir",
                    "Jurusan" => [
                        "jurusan" => [
                            "Sistem Informasi" => "si"
                        ]
                    ],
                    "Minat" => [
                        "minat" => [
                            "Programming" => "programming",
                            "Animasi" => "animasi",
                            "Desain" => "desain",
                            "Mapala" => "mapala"
                        ]
                    ],
                    "Foto" => "foto" // Menggunakan 'foto' sebagai nama input file
                ];

                foreach ($fields as $label => $field) {
                    echo "<tr>";
                    echo "<td>$label:</td>";
                    echo "<td>";
                    if ($field === "nama") {
                        echo "<input type='text' name='$field'>";
                    } elseif ($field === "tanggal_lahir") {
                        echo "<input type='date' name='$field'>";
                    } elseif ($field === "foto") { // Jika field adalah 'foto'
                        echo "<input type='file' name='$field'>"; // Menggunakan input file
                    } elseif (is_array($field)) {
                        foreach ($field as $value => $inputName) {
                            foreach ($inputName as $index => $x) {
                                echo "<input type='radio' name='$value' value='$x'> $index ";
                                
                            }
                        }
                    } else {
                        echo "<input type='text' name='$field'>";
                    }
                    echo "</td>";
                    echo "</tr>";
                }


                if ($_SERVER["REQUEST_METHOD"] === "POST")
                {
                        
                    $idmahasiswa = isset($_POST["id_mahasiswa"]) ? $_POST["id_mahasiswa"] : "";
                    $nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
                    $alamat = isset($_POST["alamat"]) ? $_POST["alamat"] : "";
                    $jk = isset($_POST["jk"]) ? $_POST["jk"] : "";
                    $tgllahir = isset($_POST["tanggal_lahir"]) ? $_POST["tanggal_lahir"] : "";
                    $jurusan = isset($_POST["jurusan"]) ? $_POST["jurusan"] : "";
                    $minat = isset($_POST["minat"]) ? $_POST["minat"] : "";
                    $stringurlfoto = isset($_FILES['foto']['name']) ? $_FILES['foto']['name'] : "";

                    $datajson = [
                        "id_mahasiswa" => $idmahasiswa,
                        "nama" => $nama,
                        "alamat" => $alamat,
                        "jenis_kelamin" => $jk,
                        "tgl_lahir" => $tgllahir,
                        "jurusan" => $jurusan,
                        "minat" => $minat,
                        "string_image" => $stringurlfoto
                    ];

                    $columns = implode(", ",array_keys($datajson));

                    $escaped_values = array_map(array($conn, 'real_escape_string'), array_values($datajson));
                    $values  = implode("', '", $escaped_values);

                    if($datajson){

                        $sql = "INSERT INTO `mahasiswa` ($columns) VALUES ('$values')";
                        if(mysqli_query($conn, $sql)){
                            echo "Records inserted successfully.";
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                        }
                    }

                                            
                    // Close connection
                    mysqli_close($conn);
                    
                }
                ?>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="submit" value="Daftar">
                        <input type="reset" value="Batal">
                    </td>
                </tr>
            </form>
        </td>
    </tr>
    <!-- Menampilkan foto yang diunggah -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES['foto'])) {
        $namaFile = $_FILES['foto']['name'];
        $ukuranFile = $_FILES['foto']['size'];
        $tipeFile = $_FILES['foto']['type'];
        $tmpName = $_FILES['foto']['tmp_name'];

        echo "<tr>";
        echo "<td>Foto yang Diunggah:</td>";
        echo "<td>";
        echo "<img src='data:$tipeFile;base64," . base64_encode(file_get_contents($tmpName)) . "' alt='Gambar profil.jpeg' style='max-width: 300px;'>";
        echo "<br>Nama File: $namaFile <br>Ukuran File: $ukuranFile bytes <br>Tipe File: $tipeFile</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>

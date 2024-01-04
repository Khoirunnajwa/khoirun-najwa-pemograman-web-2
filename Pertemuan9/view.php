<!DOCTYPE html>
<html>
<head>
    <title>View Data</title>
</head>
<body>

<h2 align="center">View Data</h2>

<?php 
require_once "./Formulir.php";

$sql = 'SELECT id_mahasiswa, nama, alamat, jenis_kelamin, tgl_lahir, jurusan, minat FROM mahasiswa';

$retval = mysqli_query($conn, $sql);

if(! $retval ) {
    die('Could not get data: ' . mysql_error());
}

$row = mysqli_fetch_array($retval, MYSQLI_ASSOC);

?>

<table border='1' align='center'>
    <thead>
        <tr colspan='1'>
            <th>ID_MAHASISWA</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>JK</th>
            <th>TGL_LAHIR</th>
            <th>JURUSAN</th>
            <th>MINAT</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach ($row as $key => $value) : ?> 
                <td> <?= $value ?>  </td>
            
            <?php endforeach; ?>
        </tr>
    </tbody>
</table>


</body>
</html>

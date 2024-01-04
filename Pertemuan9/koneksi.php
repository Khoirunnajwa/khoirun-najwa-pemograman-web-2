<?php
$conn = mysqli_connect("localhost", "root", "", "datamahasiswa");

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// $IDMahasiswa = $_POST['id_mahasiswa'];
// $Nama = $_POST['nama'];
// $Alamat = $_POST['alamat'];
// $JenisKelamin = $_POST['jeniskelamin'];
// $TanggalLahir = $_POST['Tanggal_lahir'];
// $Jurusan = $_POST['jurusan'];
// $Minat = implode(', ', $_POST['minat']); // Jika 'minat' merupakan array, gabungkan menjadi string

// // Untuk file gambar, gunakan $_FILES bukan $_POST
// $namaFile = $_FILES['gambar']['name'];
// $tmpName = $_FILES['gambar']['tmp_name'];
// $folderTujuan = "lokasi_folder_tujuan/" . $namaFile; // Tentukan folder tujuan penyimpanan

// // Pindahkan file gambar dari temporary folder ke folder tujuan
// move_uploaded_file($tmpName, $folderTujuan);

// // Gunakan prepared statement untuk mencegah SQL Injection
// $query = "INSERT INTO mahasiswa (id_mahasiswa, nama, alamat, jeniskelamin, tanggal_lahir, jurusan, minat, gambar) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

// // Persiapkan statement
// if ($stmt = mysqli_prepare($koneksi, $query)) {
//     // Bind parameter ke statement
//     mysqli_stmt_bind_param($stmt, "ssssssss", $IDMahasiswa, $Nama, $Alamat, $JenisKelamin, $TanggalLahir, $Jurusan, $Minat, $namaFile);

//     // Eksekusi statement
//     if (mysqli_stmt_execute($stmt)) {
//         echo "Data berhasil disimpan.";
//     } else {
//         echo "Error: " . mysqli_error($koneksi);
//     }

//     // Tutup statement
//     mysqli_stmt_close($stmt);
// } else {
//     echo "Error: " . mysqli_error($koneksi);
// }

// // Tutup koneksi
// mysqli_close($koneksi);
?>

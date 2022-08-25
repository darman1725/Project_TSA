<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpro";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Melakukan check koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Perintah SQL untuk membuat tabel
$sql = "CREATE TABLE peserta (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    tgl_registrasi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if (mysqli_query($conn, $sql)) {
    echo "<br>Tabel peserta berhasil dibuat";
}
else{
    echo "<br>Tabel gagal dibuat: " .mysqli_error($conn);
}

mysqli_close($conn);
?>
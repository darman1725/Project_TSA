<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dboo";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Melakukan check koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Perintah SQL untuk membuat tabel
$sql = "CREATE TABLE peserta (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    tgl_registrasi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if ($conn->query($sql) === TRUE) {
    echo "<br>Tabel peserta berhasil dibuat";
}
else{
    echo "<br>Tabel gagal dibuat: " .$conn->error;
}

$conn->close();
?>
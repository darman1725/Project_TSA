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

// Perintah SQL untuk mengupdate data
$sql = "UPDATE peserta SET email='farah123@gmail.com' WHERE id=1";
 
if ($conn->query($sql) === TRUE) {
    echo "<br>Data baru berhasil diupdate";
}
else{
    echo "<br>Data gagal diupdate: " . $conn->error;
}

$conn->close();
?>
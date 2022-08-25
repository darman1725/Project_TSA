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

// Perintah SQL untuk menghapus data
$sql = "DELETE FROM peserta WHERE id=2";
 
if ($conn->query($sql) === TRUE) {
    echo "<br>Data berhasil dihapus";
}
else{
    echo "<br>Data gagal dihapus: " . $conn->error;
}

$conn->close();
?>
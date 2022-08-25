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

// Perintah SQL untuk menampilkan data
$sql = "SELECT id,nama,email FROM peserta";
$result = $conn->query($sql);

if ($result->num_rows >0) {
    // Menampilkan data dari setiap baris
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nama: " . $row["nama"]. " - Email: " . $row["email"]. "<br>";
    }
} else{
    echo "Data tidak ditemukan";
}

$conn->close();
?>
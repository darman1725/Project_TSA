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

// Perintah SQL untuk menampilkan data
$sql = "SELECT id,nama,email FROM peserta";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Menampilkan data dari setiap baris
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"]. " - Nama: " . $row["nama"]. " - Email: " . $row["email"]. "<br>";
    }
} else{
    echo "Data tidak ditemukan";
}

mysqli_close($conn);
?>
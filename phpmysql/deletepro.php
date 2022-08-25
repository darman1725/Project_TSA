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

// Perintah SQL untuk menghapus data
$sql = "DELETE FROM peserta WHERE id=2";

if (mysqli_query($conn, $sql)) {
    echo "<br>Data berhasil dihapus";
}
else{
    echo "<br>Data gagal dihapus: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
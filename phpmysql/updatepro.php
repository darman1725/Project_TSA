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

// Perintah SQL untuk mengupdate data
$sql = "UPDATE peserta SET email='farah123@gmail.com' WHERE id=1";

if (mysqli_query($conn, $sql)) {
    echo "<br>Data baru berhasil diupdate";
}
else{
    echo "<br>Data gagal diupdate: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
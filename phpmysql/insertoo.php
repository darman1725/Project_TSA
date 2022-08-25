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

// Perintah SQL untuk menginputkan data
$sql = "INSERT INTO peserta(
    nama,
    email) VALUES 
    ('Farah','farah@gmail.com'),
    ('Andi','andi@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "<br>Data baru berhasil diinputkan";
}
else{
    echo "<br>Data gagal masuk: " .$sql. "<br>". $conn->error;
}

$conn->close();
?>
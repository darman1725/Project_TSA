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

// Perintah SQL untuk menginputkan data
$sql = "INSERT INTO peserta(
    nama,
    email) VALUES 
    ('Farah','farah@gmail.com'),
    ('Andi','andi@gmail.com')";

if (mysqli_query($conn, $sql)) {
    echo "<br>Data baru berhasil diinputkan";
}
else{
    echo "<br>Data gagal masuk: " .$sql. "<br>" .mysqli_error($conn);
}

mysqli_close($conn);
?>
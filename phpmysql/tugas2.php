<?php
// Menginputkan data dengan menggunakan konsep prosedural 

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
    ('Darman Saputra Saragih','darmansaragih087@gmail.com'),
    ('Robinson Simalungun','robinsonwijaya0104@gmail.com'),
    ('Erlina Manik Toba','erlinamanik1701@gmail.com'),
    ('Kevin Andreas Simarmata', 'kevin123@gmail.com')";

if (mysqli_query($conn, $sql)) {
    echo "<br>Data baru berhasil diinputkan";
}
else{
    echo "<br>Data gagal masuk: " .$sql. "<br>" .mysqli_error($conn);
}

mysqli_close($conn);
?>
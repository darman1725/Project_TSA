<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=dts_tsa", $username, $password);
    // Set untuk Mode Error PDO to Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Koneksi berhasil";
} catch(PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    // Set untuk Mode Error PDO to Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE dbpdo";
    // Menggunakan fungsi exec() karena tidak hasil yang dikembalikan
    $conn->exec($sql);
    echo "Database berhasil dibuat <br>";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>
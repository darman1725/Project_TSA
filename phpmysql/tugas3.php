<?php

// Menginputkan data dengan menggunakan konsep PDO 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpdo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set untuk Mode Error PDO to Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Perintah SQL untuk menginputkan data
    $sql = "INSERT INTO peserta(
        nama,
        email) VALUES 
        ('Darman Saputra Saragih','darmansaragih087@gmail.com'),
        ('Robinson Simalungun','robinsonwijaya0104@gmail.com'),
        ('Erlina Manik Toba','erlinamanik1701@gmail.com'),
        ('Kevin Andreas Simarmata', 'kevin123@gmail.com')";

     // Menggunakan fungsi exec() karena tidak hasil yang dikembalikan
     $conn->exec($sql);
     echo "Data baru berhasil diinputkan<br>";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
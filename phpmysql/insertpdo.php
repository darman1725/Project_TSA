<?php
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
    ('Farah','farah@gmail.com'),
    ('Andi','andi@gmail.com')";

     // Menggunakan fungsi exec() karena tidak hasil yang dikembalikan
     $conn->exec($sql);
     echo "Data baru berhasil diinputkan<br>";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
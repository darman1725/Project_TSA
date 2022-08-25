<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpdo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set untuk Mode Error PDO to Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Perintah SQL untuk mengupdate data
    $sql = "UPDATE peserta SET email='farah123@gmail.com' WHERE id=1";

    // Menyiapkan statement
    $stmt = $conn->prepare($sql);

    // Mengeksekusi query
    $stmt->execute();

     // Membuat echo sebagai pesan untuk mengetahui update berhasil
     echo $stmt->rowCount() . "<br> Data baru berhasil diupdate<br>";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
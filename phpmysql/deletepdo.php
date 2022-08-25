<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpdo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set untuk Mode Error PDO to Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Perintah SQL untuk menghapus data
    $sql = "DELETE FROM peserta WHERE id=2";

     // Membuat echo sebagai pesan untuk mengetahui update berhasil
     $conn->exec($sql);
     echo "<br> Data berhasil dihapus<br>";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
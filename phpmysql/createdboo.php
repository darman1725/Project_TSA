<?php
include "koneksi1.php";

// Membuat database
$sql = "CREATE DATABASE dboo";
if ($conn->query($sql) === TRUE) {
    echo "<br> Database berhasil dibuat";
} else {
    echo "<br> Database gagal dibuat: " .$conn->error;
}

$conn->close();
?>
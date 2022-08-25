<?php
include "koneksi2.php";

// Membuat database
$sql = "CREATE DATABASE dbpro";
if (mysqli_query($conn, $sql)) {
    echo "<br> Database berhasil dibuat";
} else {
    echo "<br> Database gagal dibuat: " .mysqli_error($conn);
}

mysqli_close($conn);
?>
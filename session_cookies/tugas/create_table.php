<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dts_tsa";

// Membuat koneksi
$koneksi = new mysqli($servername, $username, $password, $dbname);

// Melakukan check koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Perintah SQL untuk membuat tabel
$sql = "CREATE TABLE transaksi (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama_pelanggan VARCHAR(50),
    nama_produk VARCHAR(50),
    jenis_produk VARCHAR (30),
    qty INT(11),
    status_pembayaran enum('Sudah','Belum') default 'Sudah',
    waktu_transaksi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if ($koneksi->query($sql) === TRUE) {
    echo "<br>Tabel transaksi berhasil dibuat";
}
else{
    echo "<br>Tabel transaksi dibuat: " .$koneksi->error;
}

$koneksi->close();
?>
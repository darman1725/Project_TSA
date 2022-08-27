<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dts_tsa";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Melakukan check koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Perintah SQL untuk menginputkan data
$sql = "INSERT INTO transaksi(
    nama_pelanggan,
    nama_produk,
    jenis_produk,
    qty,
    status_pembayaran) VALUES 
    ('Joni','Minuman Ringan','Minuman','1','Sudah'),
    ('Joni','Makanan Ringan','Makanan','2','Belum'),
    ('Sule','Minuman Ringan','Minuman','1','Sudah'),
    ('Andre','Mie instant','Makanan','4','Belum'),
    ('Budi','Roti','Makanan','2','Belum')";

if ($conn->query($sql) === TRUE) {
    echo "<br>Data Transaksi berhasil diinputkan";
}
else{
    echo "<br>Data gagal masuk: " .$sql. "<br>". $conn->error;
}

$conn->close();
?>
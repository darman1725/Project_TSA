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
$sql = "INSERT INTO produk(nama_produk,harga_produk,merk_produk) VALUES('$nama_produk', '$harga_produk', '$merk_produk')";

if ($conn->query($sql) === TRUE) {
    echo "<br>Data baru dengan nama produk <strong> : $nama_produk </strong> berhasil diinputkan <br><br>";
}
else{
    echo "<br>Data gagal masuk: " .$sql. "<br>". $conn->error;
}

// Perintah SQL untuk menampilkan data
$sqlb = "SELECT * FROM produk";
$result = $conn->query($sqlb);

if ($result->num_rows >0) {
    // Menampilkan data dari setiap baris
    echo "<strong>Data Tabel Produk </strong><br>";
    while($row = $result->fetch_assoc()) {
        echo "Id: " . $row["id_produk"]. 
        " - Nama Produk: " . $row["nama_produk"]. 
        " - Harga Produk: " . $row["harga_produk"]. 
        " - Merk Produk: " . $row["merk_produk"]. 
        "<br>";
    }
} else{
    echo "Data tidak ditemukan";
}

$conn->close();
?>
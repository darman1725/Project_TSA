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
$sql = "INSERT INTO mahasiswa(
    nim,
    nama,
    tempat_lahir,
    tanggal_lahir,
    fakultas,
    jurusan,
    ipk) VALUES 
    ('13012012','James Situmorang','Medan','1995-04-02','Kedokteran','Kedokteran', '2.70'),
    ('14005011','Riana Putria','Padang','1996-11-23','FMIPA','Kimia', '3.10'),
    ('15002032','Riana Kumala Sari','Jakarta','1997-06-28','Ekonomi','Akuntansi', '3.40'),
    ('15003036','Sari Citra Lestari','Jakarta','1997-12-31','Ekonomi','Manajemen', '3.50'),
    ('15021044','Rudi Permana','Bandung','1994-08-22','FASILKOM','Ilmu Komputer', '2.90')";

if ($conn->query($sql) === TRUE) {
    echo "<br>Data Mahasiswa berhasil diinputkan";
}
else{
    echo "<br>Data gagal masuk: " .$sql. "<br>". $conn->error;
}

$conn->close();
?>
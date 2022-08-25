<?php

// membuat variabel baru
$nama_barang = "UKT Polinema";
$harga = 5000000;

// menampilkan isi variabel
echo "Ibu Mas Darman membayar $nama_barang seharga Rp $harga";

$judul = "Dibalik otak utama dari pembunuhan Brigadir Joshua Hutabarat";
echo " <h3> Judul artikel: $judul </h3>";

$judul = "Menjelang 17 Agustus, Presiden RI sudah mengukuhkan PASKIBRA Merah Putih di Istana Negara";
echo ' Judul artikel: '.$judul;

define('NAMA_KONSTANTA','NILAI KONSTANTA');
const KONSTANTA="nilai konstanta";

echo "<br><br>nilai konstanta: " .KONSTANTA. "<br/>" ;
echo "NILAI KONSTANTA: " .NAMA_KONSTANTA. "<br/>";

echo "<br><b>Data Diri Mahasiswa Peserta TSA</b>";
$jenis_kelamin = 'L'; //Tipe data char
$nama_lengkap = "Darman Saputra Saragih"; //Tipe Data String
$umur=21; //Tipe data Integer
$berat=62.2; //Tipe data Float
$tinggi=172.4; //Tipe data Float
$menikah=false; //Tipe data boolean

echo "<br>Nama Lengkap : $nama_lengkap <br>";
echo 'Jenis Kelamin: '.$jenis_kelamin.'<br>';
echo "Umur: ".$umur."Tahun<br>";
echo "Berat: $berat kg <br>";
echo 'Tinggi: '.$tinggi.'cm <br>';
echo "Status menikah: $menikah <br><br>";

$minuman = array("Kopi", "Teh", "Jus Jeruk");
$makanan = ["Nasi Goreng", "Soto", "Bubur"];

echo "<b>Daftar Minuman Di Kantin Polinema</b><br>";
for($x=0;$x<count($minuman);$x++){
    echo "* ";
	echo $minuman[$x]."<br/>"; 
}

echo "<br>";

echo "<b>Daftar Makanan Di Kantin Polinema</b><br>";
for($y=0;$y<count($makanan);$y++){
    echo "* ";
	echo $makanan[$y]."<br/>"; 
}

?>
<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_pelanggan    = $_POST['nama_pelanggan'];
$nama_produk   = $_POST['nama_produk'];
$jenis_produk    = $_POST['jenis_produk'];
$qty    = $_POST['qty'];
$status_pembayaran    = $_POST['status_pembayaran'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE transaksi SET 
nama_pelanggan='$nama_pelanggan', 
nama_produk='$nama_produk', 
jenis_produk='$jenis_produk',
qty='$qty',
status_pembayaran='$status_pembayaran' WHERE id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>
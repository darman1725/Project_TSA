<?php
include 'koneksi.php';

    //cek button    
    if ($_POST['Submit'] == "Submit") {
    $nama_pelanggan    = $_POST['nama_pelanggan'];
    $nama_produk   = $_POST['nama_produk'];
    $jenis_produk    = $_POST['jenis_produk'];
    $qty    = $_POST['qty'];
    $status_pembayaran    = $_POST['status_pembayaran'];
    $val="&nama_pelanggan=$nama_pelanggan
    &nama_produk=$nama_produk
    &jenis_produk=$jenis_produk
    &qty=$qty
    &status_pembayaran=$status_pembayaran";

    //validasi data yang kosong
    if (empty($_POST['nama_pelanggan'])||
    empty($_POST['nama_produk'])||
    empty($_POST['jenis_produk'])||
    empty($_POST['qty'])||
    empty($_POST['status_pembayaran'])) {
    echo "Data harap dilengkapi";
    }
    else{
        include "koneksi.php";

        // menginput data ke database
        mysqli_query($koneksi,"INSERT INTO transaksi(
        nama_pelanggan,
        nama_produk,
        jenis_produk,
        qty,
        status_pembayaran) VALUES(
        '$nama_pelanggan',
        '$nama_produk',
        '$jenis_produk',
        '$qty',
        '$status_pembayaran')");

    // mengalihkan halaman kembali ke index.php
    header("location:index.php");
    }

}
?>
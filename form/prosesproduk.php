<?php
    //cek button    
    if ($_POST['Submit'] == "Submit") {
    $nama_produk    = $_POST['nama_produk'];
    $harga_produk   = $_POST['harga_produk'];
    $merk_produk    = $_POST['merk_produk'];
    $val="&nama_produk=$nama_produk
    &harga_produk=$harga_produk
    &merk_produk=$merk_produk";

    //validasi data yang kosong
    if (empty($_POST['nama_produk'])||
    empty($_POST['harga_produk'])||
    empty($_POST['merk_produk'])) {
    echo "Data harap dilengkapi";
    }
    else {
    include "koneksi_produk.php";
    }
}
?>
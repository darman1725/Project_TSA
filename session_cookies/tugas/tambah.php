<!DOCTYPE html>
<html>
<style>
input[type=text],
select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=number],
select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #6c5ce7;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #6c5ce7;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>

<body>

    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <div>
        <form method="post" action="tambah_aksi.php">
            <h3>Form Tambah Data Transaksi</h3><br>
            <label for="1">Nama Pelanggan</label>
            <input type="text" id="1" name="nama_pelanggan" placeholder="Masukkan nama pelanggan">

            <label for="2">Nama Produk</label>
            <input type="text" id="2" name="nama_produk" placeholder="Masukkan nama produk">

            <label for="3">Jenis Produk</label>
            <select id="3" name="jenis_produk">
                <option selected disabled>Pilih Jenis Produk</option>
                <option value="Makanan">Makanan</option>
                <option value="Minuman">Minuman</option>
            </select>

            <label for="4">Qty</label>
            <input type="number" id="4" name="qty" placeholder="Masukkan jumlah">

            <label for="5">Status Pembayaran</label>
            <select id="5" name="status_pembayaran">
                <option selected disabled>Pilih Status Pembayaran</option>
                <option value="Sudah">Sudah</option>
                <option value="Belum">Belum</option>
            </select>
            <input type="submit" name="Submit" value="Submit">
            <a href="index.php" class="btn">Kembali</a>
        </form>
    </div>

</body>

</html>
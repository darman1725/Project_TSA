<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
</head>
<body>
 
	<h2>Form Tambah Data Transaksi</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA TRANSAKSI</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama Pelanggan</td>
				<td><input type="text" name="nama_pelanggan"></td>
			</tr>
			<tr>
				<td>Nama Produk</td>
				<td><input type="text" name="nama_produk"></td>
			</tr>
			<tr>
				<td>Jenis Produk</td>
				<td><input type="text" name="jenis_produk"></td>
			</tr>
            <tr>
				<td>Qty</td>
				<td><input type="number" name="qty"></td>
			</tr>
            <tr>
				<td>Status Pembayaran</td>
				<td><input type="text" name="status_pembayaran"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Submit"></td>
			</tr>		
		</table>
	</form>
</body>
</html>
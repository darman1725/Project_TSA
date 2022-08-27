<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
</head>
<body>
 
	<h2>Form Edit Data Transaksi</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA TRANSAKSI</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM transaksi where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama Pelanggan</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama_pelanggan" value="<?php echo $d['nama_pelanggan']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama Produk</td>
					<td><input type="text" name="nama_produk" value="<?php echo $d['nama_produk']; ?>"></td>
				</tr>
				<tr>
					<td>Jenis Produk</td>
					<td><input type="text" name="jenis_produk" value="<?php echo $d['jenis_produk']; ?>"></td>
				</tr>
                <tr>
					<td>Qty</td>
					<td><input type="number" name="qty" value="<?php echo $d['qty']; ?>"></td>
				</tr>
                <tr>
					<td>Status Pembayaran</td>
					<td><input type="text" name="status_pembayaran" value="<?php echo $d['status_pembayaran']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="Submit" value="Submit"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>
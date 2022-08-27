<?php
// panggil koneksinya
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
</head>
<body>
 
	<h2>Data Tabel Transaksi</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH TRANSAKSI</a>
	<br>
	<br>

	<form action="" method="get">
      <select name="status_pembayaran" id="status_pembayaran">
          <option disabled selected>Berdasarkan Status Pembayaran</option>
          <option value="0">Semua</option>
          <option value="1">Sudah</option>
          <option value="2">Belum</option>    
      </select>
      <input type="submit" name="send" value="Send">
    </form>
    <form action="" method="get">
        <select name="jenis_produk" id="jenis_produk">
            <option disabled selected>Berdasarkan Jenis Produk</option>
            <option value="0">Semua</option>
            <option value="1">Makanan</option>
            <option value="2">Minuman</option>    
        </select>
        <input type="submit" name="send" value="Send">
    </form>
    <form action="" method="get">            
        <select name="sort" id="sort">
            <option disabled selected>Urutkan Berdasarkan</option>        
            <option value="1">Waktu Transaksi</option>
            <option value="2">Nama Pelanggan</option>    
        </select>
        <input type="submit" name="send" value="Send">
    </form>
    <br>    
	
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama Pelanggan</th>
			<th>Nama Produk</th>
			<th>Jenis Produk</th>
			<th>Qty</th>
			<th>Status Pembayaran</th>
			<th>Waktu Transaksi</th>
			<th>Action</th>
		</tr>
		<?php 
        // Tampilkan semua data
		   if (!$koneksi) {
			die("Connection failed: " . mysqli_connect_error());
		}
		
		if (isset($_GET['status_pembayaran'])) {
			if ($_GET['status_pembayaran'] == 1) {
				$sql =  "SELECT * FROM transaksi WHERE status_pembayaran = 'Sudah' ORDER BY id ASC";
			} else if($_GET['status_pembayaran'] == 2) {
				$sql =  "SELECT * FROM transaksi WHERE status_pembayaran = 'Belum' ORDER BY id ASC";
			} else {
				$sql = "SELECT * FROM transaksi";
			}
		} else {
			$sql = "SELECT * FROM transaksi";
		}
		
		if (isset($_GET['jenis_produk'])) {
			if ($_GET['jenis_produk'] == 1) {
				$sql =  "SELECT * FROM transaksi WHERE jenis_produk = 'Makanan' ORDER BY id ASC";
			} else if($_GET['jenis_produk'] == 2) {
				$sql =  "SELECT * FROM transaksi WHERE jenis_produk = 'Minuman' ORDER BY id ASC";
			} else {
				$sql = "SELECT * FROM transaksi";
			}
		}
		
		if (isset($_GET['sort'])) {
			if ($_GET['sort'] == 1) {
				$sql =  "SELECT * FROM transaksi ORDER by waktu_transaksi ASC";
			} else if($_GET['sort'] == 2) {
				$sql =  "SELECT * FROM transaksi ORDER by nama_pelanggan ASC";
			} else {
				$sql = "SELECT * FROM transaksi";
			}
		}

		$result = mysqli_query($koneksi,$sql);
		$no = 1;
		while($d = mysqli_fetch_array($result)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama_pelanggan']; ?></td>
				<td><?php echo $d['nama_produk']; ?></td>
				<td><?php echo $d['jenis_produk']; ?></td>
				<td><?php echo $d['qty']; ?></td>
				<td><?php echo $d['status_pembayaran']; ?></td>
				<td><?php echo $d['waktu_transaksi']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">*EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">-HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>
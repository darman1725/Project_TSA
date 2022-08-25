<!-- 
Judul : nl2br
Fungsi nl2br() untuk membuat baris baru dengan cara menyisipkan (\n) dalam string.
-->

<!DOCTYPE html>
<html>

<body>

    <?php
echo "<b>Isi Berita : </b><br>";
$berita = "Pelaku penembakan kucing-kucing di Sekolah Komando (Sesko) TNI Bandung, Jawa Barat, yang sempat viral di media sosial akhirnya terungkap.\n
Pelaku itu diungkap Kepala Pusat Penerangan (Kapuspen) TNI Mayjen TNI Prantara Santosa.\n 
Disebut pelaku adalah seorang jenderal. \n
Prantara mengatakan, pelaku penembak kucing-kucing di Sekolah Komando (Sesko) TNI Bandung, Jawa Barat, diduga seseorang berpangkat jenderal bintang satu dengan inisial Brigjen TNI NA.";
echo $berita;
echo "<br>";
echo "<b><br>Isi Berita dengan fungsi nl2br() : </b><br>";
echo nl2br($berita);
?>

</body>

</html>
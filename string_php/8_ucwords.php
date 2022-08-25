<!-- 
Judul : ucwords
Fungsi ucwords() adalah mengubah karakter pertama setiap kata menjadi huruf kapital.
-->

<!DOCTYPE html>
<html>

<body>

    <?php
echo "<b>Judul Berita : </b><br>";
$berita = "aksi farel prayoga guncang istana: Bikin Pejabat joget di HUT ke-77 RI. <br>";
echo $berita;
echo "<br><b>Mengimplementasikan fungsi ucwords() dalam kalimat berita</b> <br>";
echo ucwords($berita);
?>

</body>

</html>
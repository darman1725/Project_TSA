<!-- 
Judul : strrev
Fungsi strrev() adalah bagian dari string php yang berfungsi untuk membalikkan string.
-->

<!DOCTYPE html>
<html>

<body>

    <?php
echo "<b>Judul Berita : </b><br>";
$berita = "Partai Berkarya Tak Lolos Pendaftaran, Muchdi Pr Gugat KPU ke Bawaslu";
echo $berita."<br>";
echo "<br><b>Mengimplementasikan fungsi strrev() dalam kalimat berita</b> <br>";
echo strrev($berita);
echo "<br><br>";
echo "<b>Kontak Berita : </b><br>";
$kontak = "273212311280";
echo $kontak."<br>";
echo "<br><b>Mengimplementasikan fungsi strrev() dalam angka</b> <br>";
echo strrev($kontak);

?>

</body>

</html>
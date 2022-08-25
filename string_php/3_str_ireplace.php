<!-- 
Judul : str_ireplace
Fungsi str_ireplace() adalah menggantikan beberapa karakter dengan beberapa karakter lain dalam sebuah string.
-->

<!DOCTYPE html>
<html>

<body>


    <?php
$str = "PPATK (Pusat Pelaporan dan Analisis Transaksi Keuangan) Bekukan Sejumlah Rekening terkait Dugaan Transaksi Mencurigakan dari <strong>Simpanan</strong> Brigadir J.";

echo "<b>Analisis Berita Tanpa fungsi str_ireplace()</b><br>";
echo $str."<br><br>";
echo "<b>Analisis Berita Dengan fungsi str_ireplace()</b><br>";
echo str_ireplace("Simpanan","Tabungan",$str);
?>

</body>

</html>
<!-- 
Judul : strchr
Fungsi strchr() adalah mencari kemunculan pertama string di dalam string lain.
-->

<!DOCTYPE html>
<html>

<body>

    <?php
$berita = "Istana Negara dan Kantor Presiden di Ibu Kota Negara (IKN) Masuk Proses Lelang, Nilainya Rp3 T.";
echo "<strong> Berita </strong>: ";
echo $berita."</br>";
echo "<br><b>Mencari Kata 'Kantor' dan mengembalikan sisa stringnya Dengan Fungsi strchr()</b> <br>";
echo strchr($berita,"Kantor");
echo "<br>";
echo "<br><b>Mengembalikan sisa string sebelum mencari kata 'Kantor' Dengan Fungsi strchr()</b> <br>";
echo strchr($berita,"Kantor",true);
?>

</body>

</html>
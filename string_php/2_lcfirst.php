<!-- 
Judul : lcfirst
Fungsi lcfirst() adalah mengubah karakter pertama dari sebuah kata menjadi huruf kecil.
-->

<!DOCTYPE html>
<html>

<body>

    <?php
echo "4 Nama Tersangka Kasus Brigadir J: <br>
      1. Bharada Richard Eliezer (RE) <br>
      2. brigadir ricky rizal (rr) <br>
      3. Kuat MARUF (KM) <br>
      4. IRJEN FERDY SAMBO <br>";
echo "<br>";
echo "<b>Penulisan 4 Nama Tersangka Dari Kasus Brigadir J dengan fungsi lcfirst()</b><br>";
echo "* Jika Setiap Karakter Pertama Dari Setiap Kata Huruf Kapital. <br>";
echo "1. ";
echo lcfirst("Bharada Richard Eliezer (RE) <br><br>");
echo "* Jika Setiap Karakter Dari Setiap Kata Huruf Kecil. <br>";
echo "2. ";
echo lcfirst("brigadir ricky rizal (rr) <br><br>");
echo "* Jika Setiap Karakter Pertama Dari Sebuah Kata Huruf Kapital dan Semua Karakter Pada Kata Berikutnya Huruf Kapital. <br>";
echo "3. ";
echo lcfirst("Kuat MARUF (KM) <br><br>");
echo "* Jika Setiap Karakter Dari Semua Kata Huruf Kapital. <br>";
echo "4. ";
echo lcfirst("IRJEN FERDY SAMBO");

?>

</body>

</html>
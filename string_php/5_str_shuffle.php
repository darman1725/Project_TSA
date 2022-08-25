<!-- 
Judul : str_shuffle
Fungsi str_shuffle adalah melakukan acak semua karakter string secara acak.
-->


<!DOCTYPE html>
<html>

<body>

    <p>
        Coba Refresh halaman. Fungsi ini akan mengacak semua karakter secara acak setiap kali di refresh.</p>

    <?php
echo "<b>Dengan menggunakan fungsi str_shuffle() - Huruf</b> <br>";
echo str_shuffle("ABC");
echo "<br>";
echo "<b><br>Dengan menggunakan fungsi str_shuffle() - Angka</b> <br>";
echo str_shuffle("123");
echo "<br>";
echo "<b><br>Dengan menggunakan fungsi str_shuffle() - Karakter</b> <br>";
echo str_shuffle(";@/");
?>

</body>

</html>
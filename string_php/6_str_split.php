<!-- 
Judul : str_split
Fungsi str_split() adalah membagi string menjadi array.
-->

<!DOCTYPE html>
<html>

<body>

    <?php
echo "<b>Pisahkan kata 'Katedral Ijen' menjadi array dengan fungsi str_split()</b> <br>";
print_r(str_split("Katedral Ijen"));

echo "<b><br><br>Menggunakan kata 'Vatikan' dengan parameter panjang dengan fungsi str_split()</b> <br>";
print_r(str_split("Vatikan",2));
?>

</body>

</html>
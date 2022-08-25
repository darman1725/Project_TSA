<!-- 
Judul : join
Fungsi join() mengembalikan string dari elemen array. 
Fungsi join() sering disebut juga sebagai fungsi implode().
-->

<!DOCTYPE html>
<html>

<body>
    <?php
$arr = array('Talent','Scouting','Academy','(TSA)');
echo "<b>Dengan menggunakan fungsi join()</b> <br>";
echo join(" ",$arr)."<br>";
echo "</br>";
echo "<b>Dengan menggunakan fungsi implode()</b> <br>";
echo implode("-",$arr)."<br>";
?>

</body>

</html>
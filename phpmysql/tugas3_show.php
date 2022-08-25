<?php
// Menampilkan data secara urut dari nama dengan abjad terakhir 
// Menggunakan konsep PDO

echo "<h3>Mengurutkan data berdasarkan nama abjad terakhir<h3>";
echo "<table style='border: solid 1px black'>";
echo "<tr><th>ID</th>
     <th>Nama</th>
     <th>Email</th>
     <th>Tanggal Registrasi</th>
     </tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:225px;border:1px solid black'>" .parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpdo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM peserta ORDER BY nama DESC");
    $stmt->execute();

    // Mengatur hasil array ke assosiatif
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
} catch(PDOException $e) {
    echo $sql . "<br> Data Tidak Ditemukan: " . $e->getMessage();
}

$conn = null;
echo "</table>";
?>
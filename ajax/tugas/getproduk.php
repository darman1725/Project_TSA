<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        td,
        th {
            border: 1px solid black;
            padding: 5px;
        }

        th {
            text-align: left;
        }
    </style>
</head>

<body>
    <?php
    $q = ($_GET['q']);

    $con = mysqli_connect('localhost', 'root', '');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con, "dts_tsa");
    if($q==0)
    $sql = "SELECT * FROM produk";
    else
    $sql = "SELECT * FROM produk WHERE nama_produk = '" .$q. "'";
    $result = mysqli_query($con, $sql);
    $no = 1;
    // echo $sql;
    // echo $q;

    echo "<table>
    <tr>
    <th>No</th>
    <th>Nama Produk</th>
    <th>Harga Produk</th>
    <th>Merk Produk</th>
    </tr>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . $row['nama_produk'] . "</td>";
        echo "<td>Rp " . $row['harga_produk'] . ",-</td>";
        echo "<td>" . $row['merk_produk'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
    ?>
</body>

</html>

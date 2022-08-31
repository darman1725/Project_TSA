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

        th{
            text-align: left;
        }
    </style>
</head>

<body>
    <?php
    $q = ($_GET['q']);

    $con = mysqli_connect('localhost', 'root', '');
    if(!$con) {
        die('Could not connect: ' .mysqli_error($con));
    }

    mysqli_select_db($con, "dts_tsa");
    $sql = "SELECT * FROM user WHERE username = '" . $q . "'";
    $result = mysqli_query($con,$sql);
    $no = 1;

    echo "<table>
         <tr>
         <th>No</th>
         <th>Username</th>
         <th>Role</th>
         </tr>";
         while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['role'] . "</td>";
            echo "</tr>";
         }
         echo "</table>";
         mysqli_close($con);
         ?>
    </body>

    </html>
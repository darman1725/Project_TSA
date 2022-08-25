<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
    if(isset($_GET["nama"]) AND isset($_GET["email"]) AND isset($_GET["telp"])) 
    {
        echo "Halo " .$_GET["nama"] . "!!<br>";
        echo "Alamat emailmu adalah " . $_GET["email"] ."!!<br>";
        echo "No teleponmu adalah " . $_GET["telp"] . "!!<br>";
    }
    else{
        echo "Anda harus mengakses halaman ini dari myform.html";
    }
    ?>
</body>
</html>

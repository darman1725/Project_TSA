<!DOCTYPE html>
<html>
<head>
    <style>
        .error{ color: #FF0000; }
    </style>
</head>
<body>
    <?php
    //Mendapatkan nilai dari variabel yang error
    if(isset($_GET["error"])) {
        $error = $_GET["error"];
    }
    else{
        $error = "";
    }

    // Mengatur pesan error
    $message = "";
    if($error=="variable_not_set") {
        $message = "Kamu harus akses halaman ini dari form.php";
    }
    else if($error=="name_empty"){
        $message = "Nama harus diisi";
    }
    else if($error=="email_empty"){
        $message = "Email harus diisi";
    }

    //Memeriksa form
    if (isset($_GET["name"]) AND isset($_GET["email"]) AND isset($_GET["comment"])) {
        $name = $_GET["name"];
        $email = $_GET["email"];
        $comment = $_GET["phone"];
    }
    else{
        $name = "";
        $email = "";
        $phone = "";
    }
    ?>

    <span class="error"><?php echo $message;?></span>

    <table>
        <form method="get" action="required.php">
            <tr>
                <td>Name: </td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr>
                <td>Phone: </td>
                <td><input type="text" name="phone" value="<?php echo $phone;?>"></td>
            </tr>         
            <tr>
                <td> <input type="submit" name="send" value="Send"> </td>
            </tr>
        </form>
    </table>
</body>
</html>

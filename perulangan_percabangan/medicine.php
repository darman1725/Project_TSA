<!DOCTYPE html>
<html lang="en">
<head>
    <title>Percabangan switch/case</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Red Hat Display' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <script>
        var jawab = prompt("Silahkan pilih Treatment dengan memasukan angka 1 sampai 5");
        var treatment = "";
        
        switch(jawab){
            case "1":
                treatment = "Korean Treatment";
                break;
            case "2":
                treatment = "Japan Treatment";
                break;
            case "3":
                treatment = "UK Treatment";
                break;
            case "4":
                treatment = "Indonesian Treatment";
                break;
            case "5":
                treatment = "China Treatment";
                break;
            default:
                document.write("<p>Opps! Anda Salah Pilih</p>");
        }

        if(treatment === ""){
            document.write("<p>Treatment Kosong</p>");
        } else {
            document.write("<h2>Treatment Jenis :  " + treatment + "</h2> Masih Ada");
        }
    </script>
    <br><br>
    <a class="btn btn-primary" href="doctor.php" role="button">Kembali</a>
</body>
</html>
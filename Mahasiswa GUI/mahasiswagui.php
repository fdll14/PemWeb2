<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors","On");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <link rel="stylesheet" href="css/customer.css">
</head>
<body>
    <div align="center">
        <span class="textandlogo"><img src="img/customer.png"></span>
        <span class="textandlogo"><h1>Master Mahasiswa</h1></span>
    </div>
    <div class="container">
        <form action="" method="post" autocomplete="off">
            <div align="center">
                <span class="forspan">NIM</span>
                <span><input type="text" name="nim" required oninvalid="setCustomValidity('Tolong masukan nim!')" oninput="setCustomValidity('')"></span>
            </div>
            <div align="center">
                <span class="forspan">Nama</span>
                <span><input type="text" name="nama" required oninvalid="setCustomValidity('Tolong masukan nama!')" oninput="setCustomValidity('')"></span>    
            </div>
            <div align="center">
                <span class="forspan">Nilai</span>
                <span><input type="text" name="nilai" required oninvalid="setCustomValidity('Tolong masukan nilai!')" oninput="setCustomValidity('')"></span>    
            </div>                      
            <div align="center">
                <input type="submit" class="mybutton" name="savedata" value="Save Data">
            </div>
        </form>
    </div>
</body>
</html>
<?php
require_once 'class/mahasiswa.php';
if (isset($_POST['savedata'])){
    $nimmhs = $_POST['nim'];
    $namamhs = $_POST['nama'];
    $nilaimhs = $_POST['nilai'];
    $saveMahasiswa = new Mahasiswa($nimmhs,$namamhs,$nilaimhs);
    $saveMahasiswa->Show();
}
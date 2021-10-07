<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
    <?php
    $Tajuk = '<h1> Hello World!</h1>';
    $isi = 'You are great';

    echo $Tajuk . $isi;
    $jumlah = strlen($Tajuk) + strlen($isi);
    echo "<p>Bilangan huruf untuk tajuk dan isi ialah $jumlah</p>";

    #strstr()
    $nama = "Hidayati Aziqah binti Mahayudin";
    $cari = strstr($nama,"Hid");
    echo "<p>$cari</p>";

    $nomatrik = "18DDT19F1033";
    $bilangan = strstr($nomatrik, 'F');
    echo "<p>Bilangan : $bilangan</p>";

    #strpos

    $nomatrik = "18DDT19F1033";
    $lokasi = strpos($nomatrik ,'T');
    echo "<p>No.Matrik : $nomatrik <br>Lokasi (T): $lokasi</p>";

    #substr
    $kod = substr($nomatrik, 2 , 3);
    echo "<p>$kod</P>";

    #strpos() + substr()
    $lokasi = strpos($nomatrik,'F') + 1;
    $bilangan = substr($nomatrik, $lokasi);
    echo "<p>Bilangan : $bilangan</p>";
    ?>
</body>
</html>
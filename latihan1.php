<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    echo "<h2>Selamat Datang</h2>";
    //Belajar dasar PHP
    $panjang = 10;
    $lebar = 5;
    $luas = $panjang * $lebar;
    echo "Luas Persegi Panjang adalah ".$luas;
    echo "<br>";

    if($panjang == $lebar){
        echo "Bentuk Persegi";
    }else{
        echo "Bentuk Persegi Panjang";
    }

    echo "<br>";
    $bulanAngka = 3;

    switch($bulanAngka){
        case 1:
            echo "Januari";
            break;
        case 2:
            echo "Februari";
            break;
        case 3:
            echo "Maret";
            break;
        default:
            echo "Bulan Tidak Diketahui";
    }

    ?>
</body>

</html>
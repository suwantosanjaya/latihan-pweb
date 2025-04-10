<?php
    function hitungLuasPersegi(float $panjang, float $lebar): float{
        $luas = $panjang * $lebar;
        return $luas;
    }

    $luas = hitungLuasPersegi(20, 10);
    echo "Luas Persegi Panjang adalah ".$luas;

    $luas = hitungLuasPersegi(10, 10);
    echo "<br>";
    echo "Luas Persegi Panjang adalah ".$luas;
?>
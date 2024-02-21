<?php 
    $angkaRandom = [rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100)];

    function nilaiTerbesarKedua($angkaRandom){
        sort($angkaRandom);
        print_r($angkaRandom);echo "<br>";
        return $angkaRandom[3];
    }

    print_r($angkaRandom);echo "<br>";
    echo "Nilai terbesar kedua : " . nilaiTerbesarKedua($angkaRandom);
?>
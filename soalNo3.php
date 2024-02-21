<?php 
    $lampuSekarang = "merah";
    $dataLampu = ["merah","kuning","hijau"];

    function rambuLaluLintas(){
        global $dataLampu,$lampuSekarang;
        if($lampuSekarang == $dataLampu[0]){
            $lampuSekarang = "kuning";
            return $dataLampu[0];
        } else if ($lampuSekarang == $dataLampu[1]){
            $lampuSekarang = "hijau";
            return $dataLampu[1];
        } else {
            $lampuSekarang = "merah";
            return $dataLampu[2];
        }
    }
    
    echo rambuLaluLintas();echo "<br>";
    echo rambuLaluLintas();echo "<br>";
    echo rambuLaluLintas();echo "<br>";
    echo rambuLaluLintas();echo "<br>";
?>
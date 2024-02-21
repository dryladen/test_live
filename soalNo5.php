<?php 
    function karakterTerbanyak($kata){
        // Membagi kata 1 persatu
        $data_split = str_split($kata);
        // Menghitung jumlah kata muncul
        $data_sum = array_count_values($data_split);

        asort($data_sum);
        return array_key_last($data_sum). " ".end($data_sum)."x";
    }
    echo karakterTerbanyak("wellcome");
?>
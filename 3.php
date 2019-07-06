<?php
    function operasi($N){
        $total_operasi = 0;

        for($i=$N; $i>=1;){
            $bil= $i % 2;
            if($bil == 0){
                echo $i." -> ";
                $i=$i/2;
            }else if($i == 1){
                echo $i;
                return $total_operasi;
            }else{
                echo $i." -> ";
                $i=$i*3+1;
            }
            $total_operasi++;
        }
    }

    //Panggil Function untuk menghitung banyaknya operasi
    $get = operasi(97);
    echo "<br>Jumlah Operasi : ".$get;
?>
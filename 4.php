<?php
    function buyNoodle($tgl, $uang){
        $harga_mie = 2500;
        $mie = $uang / $harga_mie; // hitung berapa mie yg didapat

        $lima = $tgl % 5;   // hitung apakah tgl kelipatan 5
        $tanggal = $tgl % 2; // hitung tgl ganjil / genap
        if($lima == 0){ // jika kelipatan 5 :
            if($tanggal == 0){ // jika tgl genap
                $bonus = floor($mie/4);
                $cek_bonus = $bonus % 2; // cek apakah jml bonus ganjil / genap
                if($bonus == 0){
                    $total_bonus = $bonus * 10; // jumlah bonus dikali 10
                }else{
                    $total_bonus = $bonus * 5; // jumlah bonus dikali 10
                }
                
            }else{ // jika ganjil
                $bonus = floor($mie/3);
                $cek_bonus = $bonus % 2;
                if($bonus == 0){
                    $total_bonus = $bonus * 10;
                }else{
                    $total_bonus = $bonus * 5;
                }
            }
            $mie = $mie + $total_bonus; // Hitung Total Mie
        }else{ // jika tidak kelipatan 5 :
            if($tanggal == 0){ 
                $bonus = floor($mie/4);
            }else{ 
                $bonus = floor($mie/3);
            }
            $mie = $mie + $bonus; // Hitung Total Mie
        }
        return floor($mie);
    }

    // Definisi variabel
    $tgl_beli = 25;
    $uang_beli = 50000;

    // Panggil Function
    $beli = buyNoodle($tgl_beli, $uang_beli);

    // Output
    echo "Tanggal Beli : ".$tgl_beli."<br>";
    echo "Uang  : ".$uang_beli."<br>";
    echo "Mie yg didapat : ".$beli;
?>
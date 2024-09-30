<?php

$array = [12, 15,17, 20, 25, 30, 35, 40, 45, 50];

$dewasa = 0 ;
$anak = 0;
foreach ($array as $nilai) {
    if ($nilai >= 17) { 
        $dewasa++;
    }else if ($nilai <17){
        $anak++;
    }
}

echo "Jumlah Kategori Dewasa : $dewasa <br> Jumlah Kategori Anak-Anak : $anak";
?>
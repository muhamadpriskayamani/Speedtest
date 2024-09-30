<?php
function pecahanUang($jumlah) {
    $uang = [100000, 50000, 20000, 10000, 5000, 1000, 500];

    foreach ($uang as $nilai) {
        $jumlah_pecahan = intdiv($jumlah, $nilai);
        if ($jumlah_pecahan > 0) {
            echo "{$nilai} = {$jumlah_pecahan}\n";
        }
        $jumlah %= $nilai;
    }
}

pecahanUang(145000);
<?php 
$data = [80, 90, 75, 100, 85, 100, 66];
$cari = 100;
$jumlah_muncul = array_count_values($data);

if (isset($jumlah_muncul[$cari])) {
    echo "Jumlah " . "angka " . $cari . " = " . $jumlah_muncul[$cari];
} else {
    echo "jumlah " . $cari . " tidak ditemukan dalam array.";
}
?>
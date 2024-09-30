<?php 
$nama1 = "Fema Flamelina Putri";
$nama2 = "Artasya legina";

$jumlah1 = strlen($nama1);
$jumlah2 = strlen($nama2); 

if($nama1 == $nama2){
    echo "nama sama";
}else{
    echo "nama pertama : $nama1 <br>";
    echo "nama kedua : $nama2 <br>";
    $total = abs($jumlah1 - $jumlah2);
    echo "<u>$nama1</u>" . " memiliki jumlah karakter lebih banyak dari " . "<u>$nama2</u>" . " : selisih " . $total . " karakter";
}
?>
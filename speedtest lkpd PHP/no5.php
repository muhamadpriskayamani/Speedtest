<?php 
    $bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
    $bil2 = [77, 99, 55, 81, 45, 90, 98];

    $nomor = array_intersect($bil1, $bil2);
    $nomor_berbeda = array_merge(array_diff($bil1, $bil2), array_diff($bil2, $bil1));
    
    echo "<b>Bilangan yang ada di kedua variabel <br>". implode(", ", $nomor);
    echo "<br><br><b>Bilangan yang tidak ada di kedua variabel <br>". implode(", ", $nomor_berbeda);
?>
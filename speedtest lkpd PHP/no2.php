<!DOCTYPE html>
<form action="" method="post">
    <input type="number" name="jamkerja" min="0" step="1" required><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php 
if(isset($_POST['submit'])) { 
    $jam = intval($_POST['jamkerja']);
    $uanglembur = 50000;

    if ($jam >= 8) {
        $jamlebih = $jam - 8;
        $uanglemburlanjutan = ($jamlebih - 1) * 25000;
        $total = $uanglembur + $uanglemburlanjutan;

        echo "Lama Kerja ; $jam Jam <br>";
        echo "Jam Lebih : $jamlebih Jam <br>";
        echo "Jumlah Kompensasi : Rp. " . number_format($total, 0, ',', '.');
    } else {
        echo "Anda tidak lembur, Jam kerja = $jam Jam";
    }
}
?>
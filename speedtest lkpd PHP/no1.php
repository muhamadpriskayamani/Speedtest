<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek String Nomor</title>
</head>
<body>

<form method="post" action="">
    <label for="inputText">Masukkan teks:</label>
    <input type="text" id="inputText" name="inputText" required>
    <button type="submit">Cek</button>
</form>

<?php
function cekStringNomor($string) {
    preg_match_all('/\d/', $string, $match);
    if (!empty($match[0])) {
        $number = implode(',', $match[0]);
        echo "Teks mengandung angka: $number";
    } else {  
        echo "Teks tidak mengandung angka.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputText = $_POST['inputText'];
    cekStringNomor($inputText);
} 
?>

</body>
</html>
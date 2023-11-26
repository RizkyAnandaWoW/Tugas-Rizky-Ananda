<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 5d</title>
</head>
<body>

<form action="" method="post">
  Masukkan jumlah angka: <input type="text" name="angka" value="<?= isset($angka) ? $angka : '' ?>">
  <input type="submit" value="Tampilkan">
</form>

<?php
$angka = 10;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Periksa apakah parameter 'angka' ada pada metode POST
    $angka = isset($_POST['angka']) ? intval($_POST['angka']) : 10;
}

for ($i = 0; $i < $angka; $i++) {
    for ($j = 1; $j <= $angka - $i; $j++) {
        echo $j . ' ';
    }
    echo '<br>';
}
?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5c</title>
    <style>
   
        .body{
          background-color:red;
          width: 300px;
          color:white;
          margin: 20px auto;
          padding:15px;
          border-radius: 25px;
          text-align: center;
        }
    </style>
</head>
<body>
<div class="body">

<?php
$nama = $_GET['nama'];
$umur = $_GET['asal'];
$alamat = $_GET['jenis'];
$pekerjaan = $_GET['tahun'];
$gambar = $_GET['gambar'];

echo '<h2>Budaya Di Indonesia</h2>';

echo '<img src="' . $gambar . '" alt="Gambar">';
echo '<p>Nama: ' . $nama . '</p>';
echo '<p>Asal: ' . $umur . '</p>';
echo '<p>Jenis: ' . $alamat . '</p>';
echo '<p>Tahun: ' . $pekerjaan . '</p>';

?>
<a href="latihan5b.php">Kembali</a>
</div>
</body>
</html>
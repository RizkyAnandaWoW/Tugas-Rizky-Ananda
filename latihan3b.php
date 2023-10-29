<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .outer-frame {
            border: 2px solid black;
            display: inline-block;
            padding: 10px;
            color: yellow;
            background-color: black;
         }
         .frame-isset {
            border: 2px solid black;
            display: inline-block;
            padding: 10px;
            color: green;
            background-color: white;
         }
         .frame-empty {
            border: 2px solid black;
            display: inline-block;
            padding: 10px;
            color: white;
            background-color: green;
         }
    </style>
</head>
<body>
<?php
$jawabanIsset ="Isset adalah = Sebuah fungsi yang digunakan untuk memeriksa apakah suatu variabel telah diatur (atau dideklarasikan) atau tidak. Fungsi ini mengembalikan nilai true jika variabel telah diatur dan memiliki nilai yang bukan null, dan mengembalikan nilai false jika variabel tidak diatur atau memiliki nilai null.<br><br>";
$jawabanEmpty ="Empty adalah = Digunakan untuk menentukan apakah variabel ada dan nilai variabel tidak bernilai false.<p>";

function soal($jawabanIsset,$jawabanEmpty){
    $style = "aturstyle";
    return "<span class='$style'>$jawabanIsset$jawabanEmpty</span>";
}

echo '<div class="outer-frame">' . soal($jawabanIsset, $jawabanEmpty) . '</div>';
?>
</body>
</html>


<div class ="frame-isset">
<?php
echo "<p>Contoh Isset<br>";

$nama = "Rizky Ananda ";
$umur = null;

if (isset($nama)) {
    echo "Variabel \$nama telah diatur.";
} else {
    echo "Variabel \$nama tidak diatur.";
}
echo "<br>";
if (isset($umur)) {
    echo "Variabel \$umur telah diatur.";
} else {
    echo "Variabel \$umur tidak diatur.";
}
?>
</div>

<div class ="frame-empty">
<?php
echo "<p>Contoh Empty<br>";
$nama = "Rizky Ananda";
$umur = 0;
$alamat = null;
$daftar = array();

if (empty($nama)) {
    echo "Variabel \$nama kosong atau tidak terdefinisi.<br>";
}else {
    echo "Variabel \$nama sudah diatur.<br>";
}

if (empty($umur)) {
    echo "Variabel \$umur kosong atau nol.<br>";
}else {
    echo "Variabel \$umur sudah diatur.<br>";
}

if (empty($alamat)) {
    echo "Variabel \$alamat kosong atau bernilai null.<br>";
}else {
    echo "Variabel \$alamat sudah diatur.<br>";
}

if (empty($daftar)) {
    echo "Variabel \$daftar kosong (array tidak memiliki elemen).<br>";
}else {
    echo "Variabel \$daftar sudah diatur.<br>";
}
?>
</div>
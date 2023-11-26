<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan5b</title>
</head>
<style>
        table {
            border-collapse: collapse;
            width: 90%;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            text-align: center;
            padding: 10px;
        }
    </style>
<body>

<?php
$dataArray = [
[
    "nama" => "Rumah Betang",
    "asal" => "Kalimantan Tengah",
    "jenis" => "Arsitektur",
    "tahun" => "Abad ke-14",
    "gambar" => "https://tse3.mm.bing.net/th?id=OIP.RQDMFAksodPoC97u_2m3KgHaE8&pid=Api&P=0&h=180",
],
[
    "nama" => "Sate Lilit",
    "asal" => "Bali",
    "jenis" => "Kuliner",
    "tahun" => "Abad ke-19",
    "gambar" => "https://tse1.mm.bing.net/th?id=OIP.29vAPNQ3bzMktsbQtK7wYwHaFP&pid=Api&P=0&h=180",
],
[
    "nama" => "Wayang Golek",
    "asal" => "Jawa Barat",
    "jenis" => "Seni Pertunjukan",
    "tahun" => "Abad ke-16",
    "gambar" => "https://tse2.mm.bing.net/th?id=OIP.GHSy808D4iBa_pJtS3i3bQHaEx&pid=Api&P=0&h=180",
],
[
    "nama" => "Pencak Silat",
    "asal" => "Berbagai daerah di Indonesia",
    "jenis" => "Seni Bela Diri",
    "tahun" => "Abad ke-6",
    "gambar" => "https://tse2.mm.bing.net/th?id=OIP.oJ3b4i7wEuS1y1x4YyUPDgHaE8&pid=Api&P=0&h=180",
],
[
    "nama" => "Tari Saman",
    "asal" => "Aceh",
    "jenis" => "Tarian",
    "tahun" => "Abad ke-12",
    "gambar" => "https://tse4.mm.bing.net/th?id=OIP.PtXKwM79UqpjEZpzUKyPXwHaE7&pid=Api&P=0&h=180",
],
];


echo '<table border="1">';
echo '<tr><th>Nama</th><th>Asal</th><th>Jenis</th><th>Tahun</th><th>Gambar</th></tr>';
foreach ($dataArray as $data) {
    echo '<tr>';
    echo '<td><a href="latihan5c.php?' . http_build_query($data) . '">' . $data['nama'] . '</a></td>';
    echo '<td>' . $data['asal'] . '</td>';
    echo '<td>' . $data['jenis'] . '</td>';
    echo '<td>' . $data['tahun'] . '</td>';
    echo '<td><img src="' . $data['gambar'] . '" alt=""></td>';
    echo '</tr>';
}
echo '</table>';
?>

</body>
</html>
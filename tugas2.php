<!DOCTYPE html>
<html>
<head>
    <title>Tugas 2</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Budaya Daerah Di Indonesia</h1>
    <h1><p>Nama: Rizky Ananda</p></h1>
    <h1><p>NIM: 701220002</p></h1>
    <h1><p>2% * 5 = 0,1%</p></h1>
    <table>
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama Budaya</th>
            <th>Asal</th>
            <th>Jenis</th>
            <th>Tahun</th>
        </tr>

        <?php
        // Inisialisasi associative array untuk Budaya Di daearah indonesia
        $budaya_daerah = array(
            array(
                "nomor" => "1",
                "gambar" => "https://tse2.mm.bing.net/th?id=OIP.oJ3b4i7wEuS1y1x4YyUPDgHaE8&pid=Api&P=0&h=180",
                "nama" => "Pencak Silat",
                "asal" => "Berbagai daerah di Indonesia",
                "jenis" => "Seni Bela Diri",
                "tahun" => "Abad ke-6"
            ),
            array(
                "nomor" => "2",
                "gambar" => "https://tse4.mm.bing.net/th?id=OIP.PtXKwM79UqpjEZpzUKyPXwHaE7&pid=Api&P=0&h=180",
                "nama" => "Tari Saman",
                "asal" => "Aceh",
                "jenis" => "Tarian",
                "tahun" => "Abad ke-12"
            ),
            array(
                "nomor" => "3",
                "gambar" => "https://tse2.mm.bing.net/th?id=OIP.GHSy808D4iBa_pJtS3i3bQHaEx&pid=Api&P=0&h=180",
                "nama" => "Wayang Golek",
                "asal" => "Jawa Barat",
                "jenis" => "Seni Pertunjukan",
                "tahun" => "Abad ke-16"
            ),
            array(
                "nomor" => "4",
                "gambar" => "https://tse1.mm.bing.net/th?id=OIP.29vAPNQ3bzMktsbQtK7wYwHaFP&pid=Api&P=0&h=180",
                "nama" => "Sate Lilit",
                "asal" => "Bali",
                "jenis" => "Kuliner",
                "tahun" => "Abad ke-19"
            ),
            array(
                "nomor" => "5",
                "gambar" => "https://tse3.mm.bing.net/th?id=OIP.RQDMFAksodPoC97u_2m3KgHaE8&pid=Api&P=0&h=180",
                "nama" => "Rumah Betang",
                "asal" => "Kalimantan Tengah",
                "jenis" => "Arsitektur",
                "tahun" => "Abad ke-14"
            ),
            array(
                "nomor" => "6",
                "gambar" => "https://tse2.mm.bing.net/th?id=OIP.ZfOjMzQb8XX7lvUm6T6o1gHaE8&pid=Api&P=0&h=180",
                "nama" => "Tari Pendet",
                "asal" => "Bali",
                "jenis" => "Tarian",
                "tahun" => 1950
            ),
            array(
                "nomor" => "7",
                "gambar" => "https://tse2.mm.bing.net/th?id=OIP.0wXjRRiAgM5xdKSDWwCkUwHaFj&pid=Api&P=0&h=180",
                "nama" => "Wayang Kulit",
                "asal" => "Jawa",
                "jenis" => "Seni Pertunjukan",
                "tahun" => "Abad ke-8"
            ),
            array(
                "nomor" => "8",
                "gambar" => "https://tse2.mm.bing.net/th?id=OIP.FMUsi5FgzK9-JPfS46CIRwHaFs&pid=Api&P=0&h=180",
                "nama" => "Rendang",
                "asal" => "Sumatra Barat",
                "jenis" => "Kuliner",
                "tahun" => "Abad ke-19"
            ),
            array(
                "nomor" => "9",
                "gambar" => "https://tse1.mm.bing.net/th?id=OIP.IUMQXaQC8Bx1noCl76KVZAHaE7&pid=Api&P=0&h=180",
                "nama" => "Batik",
                "asal" => "Jawa",
                "jenis" => "Kerajinan",
                "tahun" => "Abad ke-16"
            ),
            array(
                "nomor" => "10",
                "gambar" => "https://tse2.mm.bing.net/th?id=OIP.ty_fQL8zCKYI85_kFPJqPwHaE7&pid=Api&P=0&h=180",
                "nama" => "Rumah Gadang",
                "asal" => "Sumatra Barat",
                "jenis" => "Arsitektur",
                "tahun" => "Abad ke-15"
            ),
            array(
                "nomor" => "11",
                "gambar" => "https://tse4.mm.bing.net/th?id=OIP.3jiKGsNaWxf9hdGebv3vwAHaHa&pid=Api&P=0&h=180",
                "nama" => "Lurik",
                "asal" => "Jawa",
                "jenis" => "Kain",
                "tahun" => "Abad ke-16"
            )
        );

        // Menampilkan data Budaya daerah di indonesia
        foreach ($budaya_daerah as $budaya) {
            echo '<tr>';
            echo '<td>' . $budaya['nomor'] . '</td>';
            echo '<td><img src="' . $budaya['gambar'] . '" alt="' . $budaya['nama'] . '" width="100"></td>';
            echo '<td>' . $budaya['nama'] . '</td>';
            echo '<td>' . $budaya['asal'] . '</td>';
            echo '<td>' . $budaya['jenis'] . '</td>';
            echo '<td>' . $budaya['tahun'] . '</td>';
            echo '</tr>';
        }
        ?>

    </table>
</body>
</html>
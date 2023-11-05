<?php
$negara_info = [
    "Indonesia" => ["DKI Jakarta", "+62", "Nasi Goreng"],
    "Singapura" => ["Singapura", "+65", "Hainanese Chicken Rice"],
    "Malaysia" => ["Kuala Lumpur", "+60", "Nasi Lemak"],
    "Brunei" => ["Bandar Seri Begawan", "+673", "Ambuyat"],
    "Thailand" => ["Bangkok", "+66", "Pad Thai"],
    "Laos" => ["Vientiane", "+856", "Laap"],
    "Filipina" => ["Manila", "+63", "Adobo"],
    "Myanmar" => ["Naypyidaw", "+95", "Mohinga"]
]
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Latihan 4d</title>
    </head>
    <body>
    <table border="1" cellpadding="3" cellspacing="0">
    <tr>
    
    <th> Negara </th>
    <th> Ibukota </th>
    <th> Kode Telepon </th>
    <th> Makanan Khas </th>
    
    </tr>

    <?php
    echo "<b>Daftar Negara ASEAN dan ibukota</b><br>";

    foreach ($negara_info as $negara => $info) {
        echo "<tr>";
        echo "<td>$negara</td>";
        foreach ($info as $detail) {
            echo "<td>$detail</td>";
        }
        echo "</tr>";
    }
    
    echo "</table>";
    ?>
</body>
</html>
<?php
$negara = [
    "Indonesia" => "D.K.I Jakarta", 
    "Singapura" => "Singapura", 
    "Malaysia" => "Kuala Lumpur", 
    "Brunei" => "Bandar Seri Begawan", 
    "Thailaind" => "Bangkok",
    "Laos" => "Vientiane", 
    "Filipina" => "Manila", 
    "Myanmar" => "Naypyidaw"    ];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Latihan 4c</title>
    </head>
    <body>
        <?php
    echo "<b>Daftar Negara ASEAN dan ibukota</b><br>";

    foreach($negara as $nrp => $ibukota) : ?>
        <li><?php
        echo "$nrp : $ibukota " ?></li>
        <?php
        endforeach
        ?>
    
</body>
</html>
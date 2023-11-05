<?php
$negara = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailaind"];
$penambahan = array_push($negara, "Laos", "Filipina", "Myanmar");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Latihan 4b</title>
    </head>
    <body>
        <?php
    echo "<b>Daftar Negara ASEAN awal</b><br>";
    
    for($i =0;$i<=4;$i++){
        echo "<li> $negara[$i] </li> ";
    }
    ?>
    <?php
    echo"<br>";
    echo "<b>Daftar Negara ASEAN baru</b><br>";
    
    foreach ($negara as $penambahan){
    echo "<li> $penambahan </li>";
    }
    
    ?>
</body>
</html>
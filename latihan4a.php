<?php
$warna = ["hijau", "kuning", "kelabu", "merah muda",];
$biru = ["biru"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 4a</title>
</head>
<body>
    <?php
    echo "Balonku Ada lima<br>";
    echo "Rupa-Rupa warna-nya<br>";
    for($i =0;$i<count($warna);$i++){
    echo " $warna[$i] ";
}
    echo"dan $biru[0]";
    echo"<br>";
    echo "Meletus balon $warna[0] DOR!!! <br>";
    echo "Hatiku sangat kacau .<br>";
        
    
    ?>
</body>
</html>
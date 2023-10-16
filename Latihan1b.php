<div class="besar">
<?php
$x = "10";


//echo "<span style ='color: red;'> x = $x </span> <br>";
//echo "<span style ='color: yellow;'> y = $y </span> <p>";


//menampiklkan bilangan real dengan format 3 digit dibelakang koma
$kalimat1 = " Aku Adalah Angka  ".$x ; // tanda / adalah operator
echo "<span style ='color: black;'>$kalimat1 </span><br>";

//perkalian
$kalimat2 =  $x*8 ; // tanda * adalah operator
echo " <span style ='color: green;'>  Jika Aku di kali 8, jumlahku sekarang $kalimat2 </span> <br>";

$kalimat3 =  $kalimat2/4 ; // tanda * adalah operator
echo " <span style ='color: red;'> Jika Aku di bagi 4, jumlahku sekarang  $kalimat3 </span> <br>";

$kalimat4 = $kalimat3-6; // tanda * adalah operator
echo " <span style ='color: blue;'> Jika Aku di kurang 6, jumlahku sekarang $kalimat4 </span> <br>";

$kalimat5 =  $kalimat4+2 ; // tanda * adalah operator
echo " <span style ='color: yellow;'> Jika Aku di tambah 2, jumlahku sekarang  $kalimat5 </span> <br>";
//(to right,#ff0000 ,#ff7f00,#ffff00,#00ff00,#0000ff,#4b0082,#9400d3)
?>
</div>


<style>
    body {background:linear-gradient(white);
           height: 100hv;}
    .besar{
        font-size: 50px;
    }
</style>

<div class="besar">
<?php
$x = " Topi ";
$y = " Bundar ";

//echo "<span style ='color: red;'> x = $x </span> <br>";
//echo "<span style ='color: yellow;'> y = $y </span> <p>";


//menampiklkan bilangan real dengan format 3 digit dibelakang koma
$kalimat1 = $x ." Saya ".$y ; // tanda / adalah operator
echo "<span style ='color: black;'>$kalimat1 ,</span>";

//perkalian
$kalimat2 = $y . $x ." Saya " ; // tanda * adalah operator
echo " <span style ='color: black;'> $kalimat2 </span> <br>";

?>
</div>


<style>
    body {background:linear-gradient(white);
           height: 100hv;}
    .besar{
        font-size: 50px;
    }
</style>
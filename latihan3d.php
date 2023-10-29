<div class= outbox>
<?php
function faktorial($angka) {
    if ($angka <= 1) {
        return 1;
    } else {
        return $angka * faktorial($angka - 1);
    }
}

$angka = 5;
$hasil = faktorial($angka);
echo "Faktorial dari $angka = $hasil"; 
?>
</div>
<style>
  .outbox{       
    border: 5px solid blueviolet;    
    padding: 10px;
    margin: 10px;
    width: 30%;
        }
</style>
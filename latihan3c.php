<div class= outbox>
<?php
function Pangkat($angka, $pangkat) {
      return pow($angka,$pangkat);
}
    $angka = 5; 
    $pangkat = 4;
    $hasilpangkat = Pangkat($angka,$pangkat);
    echo" $angka pangkat $pangkat = $hasilpangkat";
    
   
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
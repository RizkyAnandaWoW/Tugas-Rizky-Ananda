<style>
    .ganti-style{
    color: navy;
    font-weight: bolder;
    font-style: arial;
    font-size: 28px;
  }  
</style>
<div class= outbox>
<?php
    
    function ganti_style ($tulisan,$kelas) {
        $tulisanstyle= "<span class= '$kelas'>$tulisan";
        return $tulisanstyle;
    }
    $tulisan= "Hello World! Here I come!";
    $kelascss="ganti-style";
    $tulisanstyle=ganti_style($tulisan,$kelascss);
    echo $tulisanstyle;
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
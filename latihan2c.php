<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1c</title>
    <style>
        .boxed-letter {
            padding: 10px;
            border: 2px solid black;
            display: inline-block;
            margin-right: 5px;
            margin-bottom: 10px;
        }
        .ganjil{
            background-color: black;
            color: white;
        }
        .genap{
            background-color: lightgray;
            color: black;
        }
        .outbox {
            border: 5px solid blueviolet;
            padding: 10px;
            margin: 10px;
            width: 30%;
        }
    </style>
</head>
<body>
<div class="outbox"> 
    <?php
    for ($i = 1; $i <= 5; $i++) {
        $AngkaRizky = ($i % 2 == 0) ? 'genap' : 'ganjil';

        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='boxed-letter $AngkaRizky'>" . $j . "</div>";
        }
        echo "<br>"; 
    }
    ?>
</div>
</body>
</html>

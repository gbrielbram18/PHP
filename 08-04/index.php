<?php 
// Dados em php puro(logica)

$frutas =["Maçã","Banana","Laranja","Morango"]





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>

    <h1>Lista</h1>


    <div class="container">
    <h2>1. Array indexado simples</h2>
    <ul>

        <?php foreach ($frutas as $fruta) : ?>
            <li><?=$fruta?></li>
        <?php endforeach ;?>
</ul>

</div>


    
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Curso de PHP</h1>
<h2>Lista de nomes</h2>


<?php

 $nome1 ="gabriel";
 $nome2 ="giovanne";
 $nome3 ="gustavoi";
 $idade1 = 18;
 $idade2 = 15;
 $idade3 = 20;
?>

<ul>
    <li>o <?php echo $nome1 ?> tem <?php echo $idade1 ?> anos de idade</li>
    <li>o <?php echo $nome2 ?> tem <?php echo $idade2 ?> anos de idade</li>
    <li>o <?php echo $nome3 ?> tem <?php echo $idade3 ?> anos de idade</li>

</ul>


<button><a href="cal.php">Calculadora</a></button>
<button><a href="index.php">Index</a></button>

    
</body>
</html>
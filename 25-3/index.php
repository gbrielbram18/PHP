<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <h1>Olá</h1>

    <?php
    //echo e usado como print para que a mensagem apareca na tela
    echo"Olá";


    ?>

<?php
    $nome="Gabriel";
    $idade=18;
?>

<h2>
<?php
    echo 'meu nome é : '.$nome;
    
?>
</h2>

<h3>
    <?php
    echo 'Minha idade é: '.$idade;
    ?>
</h3>


<hr />

<strong>
    <?php
        $hora = new DateTime();
        echo $hora->format('H:i:s');

    
    ?>
</strong>

<br><br>

<button><a href="cal.php">Calculadora</a></button>

<button><a href="nomes.php"> Nomes</a></button>
    
</body>
</html>
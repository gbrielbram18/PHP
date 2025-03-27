<?php
$somaadicao = 10 + 2;
$somasubtra = 10 - 2;
$multi = 10 * 2
    ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Calculadora onlilne</h1>

   

    <ul>
        <li>
            <strong>
                a soma do calculo de 10 + 2 é :
                <?php
                echo $somaadicao;
                ?>
            </strong>
        </li>

        <br>

        <li>
            <strong>
                a subtração do calculo de 10 - 2 é :
                <?php
                echo $somasubtra;
                ?>
            </strong>
        </li>

        <br>

        <li>
            <strong>
                a multiplicação do calculo de 10 * 2 é :
                <?php
                echo $multi;
                ?>
            </strong>
        </li>

    </ul>

    <br>

    <button><a href="index.php">Index</a></button>
    <button><a href="nomes.php">Nomes</a></button>



</body>

</html>

<!--
print("ola! seja bem vindo ao mercado de cafes ")

marca = input("insira a marca buscada: ")
valor = input(float("insira o valor: "))

if valor <=100:
    print("o cafe mais barato e este de 100 reais")
elif valor >100 and valor <=200:
    print("este e o cafe com o preço mais salgado")
elif valor >200 and valor <=300:
    print("este e o cafe mais caro")
else:
    print("esse e o cafe mais caro da historia")
-->
    
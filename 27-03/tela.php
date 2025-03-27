<?php 
// definição das variaveis
$nome = "Gabriel"; // string
$idade = 37; //int
$saldo = 1500.75; // float (ponto Flutuante)
$temConta= true;  // Bolleano
 


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tela.css">
</head>

<body>

    <h1>Tela</h1>

    <table border="1">

        <tr>
            <th>Variavel</th>
            <th>Nome</th>
            <th>valor</th>
            <th>Tipo</th>
        </tr>
        <tr>
            <td class="tdVariavel">Nome</td>
            <td><?Php echo $nome ?></td>
            <td> - </td>
        </tr>
        <tr>
            <td class="tdVariavel">Idade</td>
            <td><?php echo $idade ?></td>
            <td> - </td>
            <td> - </td>
        </tr>
        <tr>
            <td class="tdVariavel">Saldo</td>
            <td> <?php echo $saldo?> </td>
            <td> - </td>
            <td> - </td>
        </tr>
        <tr>
            <td class=" tdVariavel"> Tem Conta ? </tdcalss>
            <td><?php echo $temConta ? "sim" : "nao"?></td>
            <td> - </td>
        </tr>

    </table>



</body>

</html>
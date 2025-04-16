<?php

include ("./conexao/conexao.php");

$consulta=" SELECT * FROM listas";

//die vai matar a conexão do programa se não dar nada certo

/*
    (->) esse operador é connhecido informalmente como seta,
    serve para acessar prioridade ou metodos de um objetivo 

*/ 


$con=$mysqli->query($consulta) or die($mysqli->error);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Web</title>

</head>
<body>

    <div>
        <h1>sitema Web</h1>

        <table border="1">

            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Cidade</th>
            </tr>

            <?php while($dado = $con->fetch_array()) { ?>

            <tr>
                <td><?php echo $dado["id"];?></td>
                <td><?php echo $dado["nome"];?></td>
                <td><?php echo $dado["email"];?></td>
                <td><?php echo $dado["cidade"];?></td>
            </tr>
                <?php }?>
        </table>

    </div>


    
</body>
</html>
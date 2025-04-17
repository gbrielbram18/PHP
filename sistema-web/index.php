<?php
    include("./conexao/conexao.php");

    $consulta = "SELECT * FROM listas";

    // die vai matar a conexão do programa se não der certo 

    /* (->) esse operador é conhecido informalmente como seta,
        serve para acessar propriedades ou métodos de um objeto
    */

    $con = $mysqli->query($consulta) or die($mysqli->error);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>



    <div class="container">
        <?php
        include("nav.php");
        
        ?>

        

        <table class="table table-striped border">
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Cidade</th>
            </tr>

            <?php while($dado = $con->fetch_array()) { ?>

            <tr>
                <td><?php echo $dado["id"]?></td>
                <td><?php echo $dado["nome"]?></td>
                <td><?php echo $dado["email"]?></td>
                <td><?php echo $dado["cidade"]?></td>
            </tr>
            <?php } ?>

        </table>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>
</html>
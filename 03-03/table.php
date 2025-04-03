
<?php
    $pessoas  = ["Carlos", "Juliana", "Fernando", "Lucas", "Gabs"];
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
</head>
<body>
    <h1>Minha lista de usuarios</h1>

    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Observação</th>
        </tr>

        <?php for ($i = 0; $i < count(value: $pessoas); $i++): ?>
            <tr>
                <td><?php echo $pessoas[$i]; ?></td>
                <td><?php echo ($pessoas[$i] == "Juliana") ? "A Chefe do time de programadores" : "-" ?></td>
            </tr>
        <?php endfor; ?>

    </table>
    
</body>
</html>






    
</body>
</html>
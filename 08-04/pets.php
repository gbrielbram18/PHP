<?php    

$pets = [
    ["nome" => "Rex", "tipo" => "Cachorro", "idade" => 5, "preco" => 1200.00],
    ["nome" => "Mingau", "tipo" => "Gato", "idade" => 3, "preco" => 850.50],
    ["nome" => "Piu Piu", "tipo" => "Pássaro", "idade" => 2, "preco" => 150.00],
    ["nome" => "Nemo", "tipo" => "Peixe", "idade" => 1, "preco" => 45.90],
    ["nome" => "Thor", "tipo" => "Hamster", "idade" => 1.5, "preco" => 75.25]

];


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pets</title>
    <link rel="stylesheet" href="aba.css">
</head>
<body>

<h1>Lista de Pets</h1>

<div class="container">
<table>
<tr>
    <th>Nome</th>
    <th>Tipo</th>
    <th>idade</th>
    <th>preço</th>
</tr>

<?php foreach($pets as $pet):?>
<tr>
    <td><?=$pet['nome'] ?></td>
    <td><?=$pet['tipo']?></td>
    <td><?=$pet['idade']?></td>
    <td><?=$pet['preco']?></td>
</tr>
<?php endforeach;?>




</table>

</div>




    
</body>
</html>
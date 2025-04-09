<?php
//Dados em PHP puro (lógica)
$frutas = ["Maçã", "Banana", "Laranja", "Morango"];

$alunos = [
    ["nome" => "Jão", "idade" => 20, "nota" => 8.5],
    ["nome" => "Gabs", "idade" => 21, "nota" => 6.5],
    ["nome" => "Juliana", "idade" => 33, "nota" => 7.5],
    ["nome" => "Clotilde", "idade" => 25, "nota" => 4.5],
];

$cursos = [
    "TI" => ["nome" => "Programação Web", "duracao" => 6],
    ["nome" => "Bacno de dados", "duracao" => 4],

    "administracao" => [
        ["nome" => "Gestao de projetos", "duracao" => 31],
        ["nome" => "Marketing", "duracao" => 0],
    ]
];

$produtos =[
    ["nome"=> "Notebook","preco" =>3500, "estoque"=>10],
    ["nome"=> "Tablet","preco" =>899.99, "estoque"=>8],
    ["nome"=> "Fone JBL","preco" =>150.99, "estoque"=>10],
    
];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h1>Lista de frutas</h1>

        <h2>1. Array Indexado Simples</h2>

        <ul>
            <?php foreach ($frutas as $fruta): ?>
                <li><?= $fruta ?></li>
            <?php endforeach; ?>
        </ul>

        <hr>
        <h3>2. Array Associativo em tabela</h3>
        <table>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Nota</th>
                <th>Situação</th>
            </tr>
            <?php foreach ($alunos as $aluno): ?>
                <tr>
                    <td><?= $aluno['nome'] ?></td>
                    <td><?= $aluno['idade'] ?></td>
                    <td><?= $aluno['nota'] ?></td>
                    <td><?= $aluno['nota'] >= 5 ? "Aprovado" : "Reprovado" ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <hr>

        <h4>3 Array Multidimensional complexo</h4>

        <?php foreach ($cursos as $area => $cursosArea): ?>
            <table>
                <tr>
                    <th>Cursos</th>
                    <th>Duração(meses)</th>
                </tr>
            </table>

        <?php endforeach; ?>

        <h4>4Array Multidimensional complexo</h4>
        <?php foreach ($cursosArea as $cursos): ?>
            <tr>
                <td>oi</td>
                <td>iu</td>
            </tr>
        <?php endforeach ?>

        <hr>

        <h5>5. Produtos com função</h5>

        <table>
            <tr>
                <th>Produtos</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Disponivel</th>
            </tr>
            <?php foreach($produtos as $produto):?>
                <tr>
                    <td><?= $produto['nome'] ?></td>
                    <td><?= $produto['preco']?></td>
                    <td><?= $produto['estoque']?></td>
                    <!--<th><?= $produto['estoque'] >= 5 ?"disponivel": "indisponivel " ?></th>-->
                </tr>
            <?php endforeach; ?>
        </table>


    </div>

</body>

</html>
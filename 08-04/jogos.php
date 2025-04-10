<?php    

$jogos = [
    ["nome" => "GTA 5", "tipo" => "Acao", "imagem" => "./GTA.jpg" ,"preco" => 250],
    ["nome" => "Mario Kard Deluxe", "tipo" => "Corrida","imagem" => "./Mariok.jpg" ,"preco" => 200.00],
    ["nome" => "Mortal Kombat", "tipo" => "Luta","imagem" => "./MK.jpg ","preco" => 100.00],
    ["nome" => "Call Of Duty III", "tipo" => "Acao", "imagem" => "CODD.jpg","preco" => 249.99],

];

function formatarPreco($preco){
    return 'R$' . number_format($preco,2,',','.');
};





?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de JOGOS</title>
    <link rel="stylesheet" href="./jogo.css">
</head>
<body>

<h1>Lista de Jogos</h1>

<div class="container">

<table>
<?php foreach($jogos as $jogo):?>
<tr>
    <th>Nome</th>
    <th>Tipo</th>
    <th>preço</th>
</tr>


<tr>
    <td></legend><img src="<?=$jogo['imagem']?>" alt="<?=$jogo['nome']?>"> <?=$jogo['nome']  ?></td>
    <td><?=$jogo['tipo']?></td>
    <td><?= formatarPreco($jogo['preco'])?></td>
</tr>
<?php endforeach;?>




</table>

</div>

</body>
</html>
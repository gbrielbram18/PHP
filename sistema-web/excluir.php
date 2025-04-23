<?php

include("./conexao/conexao.php");



//Veeificar se o parâmetro do "codigo" esta presente na URl


if (isset($_GET["codigo"])) {
    $idParaExluir = $_GET["codigo"];

    //construir e executar a consulta de exlusão
    $sql = "DELETE FROM listas WHERE id = $idParaExluir";

    if ($mysqli->query($sql)) {
        header("location: index.php");
    } else {
        echo "Erro ao excluir o registro";
    }

}

?>
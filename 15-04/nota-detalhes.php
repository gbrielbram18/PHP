<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

<?php


    $nota =$_GET["nota"];

    echo "<strong class='text-warning'>Sua nota é: </strong> <strong class='text-danger'>$nota </strong>";

// Se a nota do aluno for maior que 6, você  esta aprovado
// senão esta  reprovado

if($nota >= 6){
    echo "<br>";
    echo"<strong>parabens, você passou</strong>";
} elseif ($nota = empty($nota)){
    echo "<br>";   
    echo "Você nao digitou sua nota";
} else{
    echo "<br>";
    echo "<strong>Reprovado</strong>";

}


?>
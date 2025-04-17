<?php
include("./conexao/conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];





    $sql= "INSERT INTO listas (nome, email, cidade) VALUE ('$nome', '$email' ,'$cidade')";

   
if(mysqli_query($mysqli, $sql)){
    header("location: index.php") ;
} else{
    echo"Error". $sql;
}

?>
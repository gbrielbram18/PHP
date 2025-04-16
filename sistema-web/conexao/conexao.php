<?php


$hostname="localhost";
$bancodedados="se_bank";
$usuario="root";
$senha= "";

$mysqli = new mysqli ($hostname, $usuario, $senha, $bancodedados);


//se existir um erro, vai mostrar nessa condição
// conector _erro, significa conect error number (irá retortnar o mumero do erro )

if ($mysqli->connect_error) {
 echo"falha ao conectar";
} else{
    echo"Conectado ao Banco de dados";
}


?>
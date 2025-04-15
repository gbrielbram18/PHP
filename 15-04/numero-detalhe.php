<?php
 $txtNumero = $_POST['txtNumero'] ;
 $gera = rand(1,100);

echo"numero geral é: $gera";
echo"<br>";


//condição
//se o gera == txtNumero

if ($gera == $txtNumero) {
    echo "<br>";
    echo "parabens,o numero $txtNumero  era premiado ";
}else{
    echo "<br>";
    echo "infelizmente o numero $txtNumero nao esta premiado";
}



?>
<?php 

# Tipos primitivos

#Inteiro(integer) e usado para numeros
$idade = 18;

echo"sua idade e: $idade anos ".getType($idade) ;
echo "<br><br>";

#ponto flutuante (float)
$preco = 20;

echo "preço: ".$preco ." Tipo: " .getType(value: $preco);
echo "<br><br>";


#string 
$nome = "gabriel";
echo "nome: ".$nome. " "."Tipo: ".getType(value: $nome);
echo "<br><br>";

// Boolean (boolean)
$temCarr = true;
echo "Tem carro? ".$temCarr ." Tipo: ".getType(value: $temCarr);

//Array
$cores = ["Roxo "," Preto "," Branco "];
#           [0,      1       2]
echo "Cores: ";
print_r($cores);
echo "<br><br>";
echo"Tipo: ".getType($cores);

#null
$vazio = null;
echo "Vazio: ".$vazio." Tipo: ".getType($vazio) ;






?>
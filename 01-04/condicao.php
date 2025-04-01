<?php
    $idade = 19;
    $nome = "Gabriel";

    //aqui pode usar || ou tambem pode usar or em php
     if ($idade=== 18 or $idade >18) {
        echo"$nome, voce tem $idade ou mais anos de idade!";
    }



    echo"<br><br>";
    
    //aqui pode usar && ou tambem pode usar and em php
    if ($idade=== 18 and $nome === "Gabriel") {
        echo "voce tem $idade anos. Pode entrar";
    }else{
        echo "nao deu certo";
    }

    








?>
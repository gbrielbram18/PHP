<?php
    $cores = ["Vermelho", "Azul", "Verde", "Rosa"];

    for ($i = 0; $i < count(value: $cores); $i++) {
        //echo "Cor: $cores[$i] <br>";
    
        if ($cores[$i] == "Vermelho" ) {
            echo "Cor: $cores[$i] - esta é minha cor favorita " . "<br>";
        } else {
            echo "Cor: $cores[$i] <br>";
        }
    }

?>
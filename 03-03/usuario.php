<?php

    $pessoas = ["Carlos", "ronaldo", "Fernanda", "Lucas", 'Gabs'];

    for ($i = 0; $i < count(value: $pessoas); $i++) {
        if ($pessoas[$i] == "Fernanda" ) {
            echo " $pessoas[$i] - esta é a unica garota do grupo " . "<br>";
        } else {
            echo " $pessoas[$i] <br>";
        } 
    }
?>



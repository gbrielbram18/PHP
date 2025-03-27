<?php
#product
$product1 = "soap";
$product2 = "coffe";


#marck
$marck1 = "Tixan";
$marck2 = "Nestle";

#value
$value1 = 5.49;
$value2 = 15.90;


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>list the products</h1>


    <div class="container">
        <table border="1">
            <tr>
                <th>products</th>
                <th>marck</th>
                <th>value</th>
            </tr>
            <tr>
                <td> <?php echo $product1 ?></td>
                <td> <?php echo $marck1 ?> </td>
                <td>$<?php echo $value1?> </td>
            </tr>
            <tr>
                <td> <?php echo $product2 ?></td>
                <td> <?php echo $product2 ?> </td>
                <td>$<?php echo $value2 ?></td>
            </tr>

        </table>
        <br><br>

        <button><a href="lista_nomes.php">lista de usuarios</a></button>



    </div>







</body>

</html>
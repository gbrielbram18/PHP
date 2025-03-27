<?php 

$nome1 = "gustavo";
$nome2 = "joao";
$nome3 = "yuri";
$nome4 = "roger"; 


#SECOND
$firstName1 = " gomes";
$firstName2 = " pedro";
$firstName3 = " alberto";
$firstName4 = " guedes";

#first
$lastName1 = " pereira";
$lastName2 = " silva";
$lastName3 = " do carmo";
$lastName4 = " andrade";


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de nomes</title>

    <link rel="stylesheet" href="list_name.css">
    
</head>
<body>


<h1>lista de nomes </h1>




    <div class="container">
        <table border="1">
            
            <tr>
                <th>Name</th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>

            <tr>
                <td> <?php echo $nome1?></td>
                <td> <?php echo $firstName1?></td>
                <td> <?php echo $lastName1?></td>
                
            </tr>
            
            <tr>
                <td> <?php echo $nome2 ?> </td>
                <td> <?php echo $firstName2?> </td>
                <td> <?php echo $lastName2?> </td>
            </tr>
            <tr>
                <td> <?php echo $nome3?> </td>
                <td> <?php echo $firstName3?> </td>
                <td> <?php echo $lastName3?> </td>
            </tr>
            <tr>
                <td> <?php echo  $nome4?> </td>
                <td> <?php echo  $firstName4?> </td>
                <td> <?php echo  $lastName4?> </td>
            </tr>

        </table>
        <br><br>

        <button><a href="table.php">lista de produtos</a></button>



    </div>
    
</body>
</html>
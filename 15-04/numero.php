<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>

    <div>
        <form action="numero-detalhe.php" method ="post">
            <label for="txtNumero">Digite o número da sorte</label>
            <input type="text" id="txtNumero" name="txtNumero" placeholder="Tentar sorte">
        </form>
    </div>

    <div>
        <input type="submit" value="Tentar sorte">
    </div>
    
</body>
</html>
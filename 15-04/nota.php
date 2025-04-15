<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <main class="container col-md-6 mt-5 text-center">
        <form action="nota-detalhes.php" method="get">
            <section class="form-control">
                <label for="nota" class="d-block  mb-2 text-sucess">Nota:</label>
                <input type="number" class="form-control" id="nota" name="nota" placeholder="Digite a sua nota!">
            </section>

            <section class="d-block mt-3">
                <input type="submit" class="btn btn-success" value="verificar">
            </section>
        </form>
    </main>
    
</body>
</html>
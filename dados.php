<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
    <?php
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];
        $estado = $_GET['estado'];
        $pais = $_GET['pais'];
        $esporte = $_GET['esporte'];
        $comida = $_GET['comida'];
        echo($nome." tem $idade anos é nascido em $estado/$pais, seu esporte preferido é $esporte e sua comida preferida é $comida");
    ?>
</body>
</html>
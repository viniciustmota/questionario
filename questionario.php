<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionario</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/estilos/estilos.css">
</head>
<body>
    <section class="container">
        <h1 class="container__titulo">Questionario</h1>
        <p class="container__descricao">Informe seus dados</p>
    </section>

    <section class="questionario">
        <form action="dados.php" method="get">
        <label for="nome" class="questionario__label">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="digite seu nome" class="questionario__resposta">

        <label for="idade" class="questionario__label">Idade:</label>
        <input type="text" id="idade" name="idade" placeholder="digite sua idade" class="questionario__resposta">

        <label for="pais" class="questionario__label">Pais:</label>
        <input type="text" id="pais" name="pais" placeholder="digite seu pais" class="questionario__resposta">

        <label for="estado" class="questionario__label">Estado:</label>
        <input type="text" id="estado" name="estado" placeholder="digite seu estado" class="questionario__resposta">

        <label for="esporte" class="questionario__label">Esporte preferido:</label>
        <input type="text" id="esporte" name="esporte" placeholder="digite seu esporte preferido" class="questionario__resposta">

        <label for="comida" class="questionario__label">Comida preferida:</label>
        <input type="text" id="comida" name="comida" placeholder="digite sua comida preferida" class="questionario__resposta">

        <input type="submit" value="Enviar" class="questionario__btn"></input>
        </form>
    </section>
    <footer class="rodape">
        <p class="rodape__copyrigth">&copy;Mota</p>
    </footer>
</body>
</html>
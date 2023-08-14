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
            <select name="esporte" id="">
                <option value="Atletismo">Atletismo</option>
                <option value="Automobilismo">Automobilismo</option>
                <option value="Badminton">Badminton</option>
                <option value="Basquete">Basquete</option>
                <option value="Basquete 3×3">Basquete 3×3</option>
                <option value="Beachtennis">Beachtennis</option>
                <option value="Beisebol">Beisebol</option>
                <option value="Biribol">Biribol</option>
                <option value="BMX">BMX</option>
                <option value="Bobsled">Bobsled</option>
                <option value="Bocha">Bocha</option>
                <option value="Bodyboard">Bodyboard</option>
                <option value="Boliche">Boliche</option>
                <option value="Boxe">Boxe</option>
                <option value="Canoagem">Canoagem</option>
                <option value="Capoeira">Capoeira</option>
                <option value="Cheerleading">Cheerleading</option>
                <option value="Ciclismo de Estrada">Ciclismo de Estrada</option>
                <option value="Ciclismo de Pista">Ciclismo de Pista</option>
                <option value="Corrida de Rua">Corrida de Rua</option>
                <option value="Cross Country">Cross Country</option>
                <option value="Crossfit">Crossfit</option>
                <option value="Curling">Curling</option>
                <option value="Dama">Dama</option>
                <option value="Dança Esportiva">Dança Esportiva</option>
                <option value="Escalada Esportiva">Escalada Esportiva</option>
                <option value="Esgrima">Esgrima</option>
                <option value="E-Sports">E-Sports</option>
                <option value="Fisiculturismo">Fisiculturismo</option>
                <option value="Futebol">Futebol</option>
                <option value="Futebol Americano">Futebol Americano</option>
                <option value="Futebol de Areia">Futebol de Areia</option>
                <option value="Futevôlei">Futevôlei</option>
                <option value="Futsal">Futsal</option>
                <option value="Ginástica Artística">Ginástica Artística</option>
                <option value="Ginástica Ritmica">Ginástica Ritmica</option>
                <option value="Goalball">Goalball</option>
                <option value="Golfe">Golfe</option>
                <option value="Handebol">Handebol</option>
                <option value="Highline">Highline</option>
                <option value="Hipismo">Hipismo</option>
                <option value="Hóquei">Hóquei</option>
                <option value="Hóquei de Grama">Hóquei de Grama</option>
                <option value="Jiu-Jitsu">Jiu-Jitsu</option>
                <option value="Jogo de Malha">Jogo de Malha</option>
                <option value="Judô">Judô</option>
                <option value="Karatê">Karatê</option>
                <option value="Kickboxing">Kickboxing</option>
                <option value="Kitesurfe">Kitesurfe</option>
                <option value="Kung Fu">Kung Fu</option>
                <option value="Levantamento de Peso">Levantamento de Peso</option>
                <option value="Luge">Luge</option>
                <option value="MMA">MMA</option>
                <option value="Motociclismo">Motociclismo</option>
                <option value="Mountain Biking">Mountain Biking</option>
                <option value="Muay Thai">Muay Thai</option>
                <option value="Nado Artístico">Nado Artístico</option>
                <option value="Natação">Natação</option>
                <option value="Parapente">Parapente</option>
                <option value="Patinação">Patinação</option>
                
                <option value="Patinação Artística no Gelo">Patinação Artística no Gelo</option>
                <option value="Patinação de Velocidade no Gelo">Patinação de Velocidade no Gelo</option>
                <option value="Polo Aquático">Polo Aquático</option>
                <option value="Rafting">Rafting</option>
                <option value="Remo">Remo</option>
                <option value="Rugby">Rugby</option>
                <option value="Saltos Ornamentais">Saltos Ornamentais</option>
                <option value="Skate">Skate</option>
                <option value="Skeleton">Skeleton</option>
                <option value="Ski Esportivo">Ski Esportivo</option>
                <option value="Slackline">Slackline</option>
                <option value="Snowboard Esportivo">Snowboard Esportivo</option>
                <option value="Softball">Softball</option>
                <option value="Squash">Squash</option>
                <option value="Stand Up Paddle">Stand Up Paddle</option>
                <option value="Surfe">Surfe</option>
                <option value="Taekwondo">Taekwondo</option>
                <option value="Tiro com Arco">Tiro com Arco</option>
                <option value="Tiro Esportivo">Tiro Esportivo</option>
                <option value="Triathlon">Triathlon</option>
                <option value="Tênis">Tênis</option>
                <option value="Tênis de Mesa">Tênis de Mesa</option>
                <option value="Vela">Vela</option>
                <option value="Voo Livre">Voo Livre</option>
                <option value="Voleibol">Voleibol</option>
                <option value="Voleibol de Praia">Voleibol de Praia</option>
                <option value="Windsurf">Windsurf</option>
                <option value="Wingsuit">Wingsuit</option>
                <option value="Wrestling">Wrestling</option>
                <option value="Xadrez">Xadrez</option>
            </select>

            <!-- <input type="text" id="esporte" name="esporte" placeholder="digite seu esporte preferido" class="questionario__resposta"> -->

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
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<body>
    <header>
        <h1>
            Calculador de tempo.
        </h1>
    </header>
    <main class="flex-center-items">
        <fieldset>
            <legend>Tempo em segundos</legend>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <label for="segundos">Segundos</label>
                <input type="number" name="segundos" id="segundos" required placeholder="Digite um tempo em segundos">
                <input class="action-button" type="submit" value="Calcular">
            </form>
        </fieldset>
        <div class="resultado">
            <?php
            $segundos = $_POST['segundos'] ?? 0;
            $minutos = intdiv($segundos, 60);
            $horas = intdiv($minutos, 60);
            $dias = intdiv($horas, 24);
            $semanas = intdiv($dias, 7);
            $anos = intdiv($dias, 365);

            echo "Ao todo, $segundos segundos são:<br>";
            echo "$minutos minutos<br>";
            echo "$horas horas<br>";
            echo "$dias dias<br>";
            echo "$semanas semanas<br>";
            echo "$anos anos<br>";
            ?>
        </div>
    </main>
    <footer>
        <button class="back-button" onclick="window.history.back()">Voltar</button>
        <p>
            <a class="link" target="_blank" rel="noopener" href="https://www.estudonauta.com/">
                Estudonauta
            </a>
        </p>
        <p>
            &copy; 2023 - Todos os direitos reservados.
        </p>
    </footer>
</body>

</html>
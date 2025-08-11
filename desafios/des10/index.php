<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<body>
    <header>
        <h1>
            Idade por ano
        </h1>
        <p>
            Escolha um ano de nascimento em um ano alvo para calcular sua idade em tal ano
        </p>
    </header>
    <main class="flex-center-items">
        <fieldset>
            <legend>Idade por ano</legend>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="margin">
                    <label for="data-nascimento">Data de Nascimento</label>
                    <input type="datetime-local" name="data-nascimento" id="data-nascimento" required>
                    <label for="data-alvo">Data Alvo</label>
                    <input type="datetime-local" name="data-alvo" id="data-alvo" required>
                </div>
                <input class="action-button" type="submit" value="Calcular">
            </form>
            <p>
                <?php
                date_default_timezone_set("America/Sao_Paulo");
                echo "Data e hora📅" . date("d/m/Y") . "🕛" . date("H:i");
                ?>
            </p>
        </fieldset>
        <div class="resultado">
            <?php
            if (isset($_POST['data-nascimento']) && isset($_POST['data-alvo'])) {
                $nascimento = new DateTime($_POST['data-nascimento']);
                $alvo = new DateTime($_POST['data-alvo']);
                if ($alvo < $nascimento) {
                    echo "A data alvo deve ser posterior à data de nascimento.";
                } else {
                    $diferenca = $nascimento->diff($alvo);
                    echo "Idade em {$alvo->format('d/m/Y H:i')}: ";
                    echo "{$diferenca->y} anos, ";
                    echo "{$diferenca->m} meses, ";
                    echo "{$diferenca->d} dias, ";
                    echo "{$diferenca->h} horas e ";
                    echo "{$diferenca->i} minutos.";
                }
            }
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
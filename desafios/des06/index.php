<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
    <link rel="stylesheet" href="estilo.css">
</head>
<?php
$dividendo = $_POST['dividendo'] ?? 0;
$divisor = $_POST['divisor'] ?? 0;
if ($dividendo != 0 || $divisor != 0) {
    $resto = $dividendo % $divisor;
    $equal = intdiv($dividendo, $divisor);
} else {
    $resto = 0;
    $equal = 0;
}
?>

<body>
    <header>
        <h1>
            Desafio 6 - Anatomia de uma divisão
        </h1>
    </header>
    <main class="flex-center-items">
        <div class="margin border">
            <fieldset>
                <legend>Divisão</legend>
                <form action="" method="post">
                    <label for="dividendo">Dividendo</label>
                    <input type="number" min="1" name="dividendo" id="divisor" required placeholder="Digite um Número">
                    <label for="divisor">Divisor</label>
                    <input type="number" min="1" name="divisor" id="divisor" required placeholder="Digite um número">
                    <button class="action-button" type="submit">Calcular</button>
                </form>
            </fieldset>
        </div>
        <div class="resultado">
            <div class="dividendo">
                <?php echo "$dividendo" ?>
            </div>
            <div class="divisor">
                <?php echo "$divisor" ?>
            </div>
            <br>
            <div class="resto">
                <?php echo "$resto" ?>
            </div>
            <div class="equal">
                <?php echo "$equal" ?>
            </div>

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
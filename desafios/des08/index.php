<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<body>
    <header>
        <h1>
            Raizes, quadrada e cubica.
        </h1>
    </header>
    <main class="flex-center-items">
        <fieldset>
            <legend>Raizes</legend>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <label for="valor">Valor</label>
                <input type="number" name="valor" id="valor" required placeholder="Digite um número">
                <input class="action-button" type="submit" value="Calcular">
            </form>
        </fieldset>
        <div class="resultado">
            <?php
            $valor = $_POST['valor'] ?? 0;
            $quadrada = number_format(sqrt($valor), 2);
            $cubica = number_format(pow($valor, 1 / 3), 2);
            echo "A raiz quadrada de <strong>$valor</strong> é <strong>$quadrada</strong>, e a cúbica é <strong>$cubica</strong>.";
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
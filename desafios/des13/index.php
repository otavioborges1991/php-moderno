<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<body>
    <header>
        <h1>
            Caixa Eletronico
        </h1>
    </header>
    <main class="flex-center-items">
        <fieldset>
            <legend>Caixa Eletronico</legend>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="margin"><label for="valor">Valor A retirar</label></div>
                <div class="margin"><strong>R$</strong><input class="short" type="number" step="5" name="valor" id="valor" required></div>
                <input class="action-button" type="submit" value="Retirar">
            </form>
        </fieldset>
        <div class="resultado">
            <?php
            $valor = $_POST['valor'] ?? 0;
            $resto = $valor;
            $cedulas_200 = 0;
            $cedulas_100 = 0;
            $cedulas_50 = 0;
            $cedulas_20 = 0;
            $cedulas_10 = 0;
            $cedulas_5 = 0;

            while ($resto >= 200) {
                $cedulas_200 += 1;
                $resto -= 200;
            }
            while ($resto >= 100) {
                $cedulas_100 += 1;
                $resto -= 100;
            }
            while ($resto >= 50) {
                $cedulas_50 += 1;
                $resto -= 50;
            }
            while ($resto >= 20) {
                $cedulas_20 += 1;
                $resto -= 20;
            }
            while ($resto >= 10) {
                $cedulas_10 += 1;
                $resto -= 10;
            }
            while ($resto >= 5) {
                $cedulas_5 += 1;
                $resto -= 5;
            }

            echo "Com um saque de $valor você recebe<br>";
            echo "$cedulas_200 cedulas de $200<br>";
            echo "$cedulas_100 cedulas de $100<br>";
            echo "$cedulas_50 cedulas de $50<br>";
            echo "$cedulas_20 cedulas de $20<br>";
            echo "$cedulas_10 cedulas de $10<br>";
            echo "$cedulas_5 cedulas de $5<br>";

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
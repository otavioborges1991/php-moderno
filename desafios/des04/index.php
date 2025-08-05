<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor 2.0</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<?php

$valor = isset($_POST['valor']) ? $_POST['valor'] : 0;
$moeda = isset($_POST['moeda']) ? $_POST['moeda'] : 'dolar';
$valorConvertido = null;

?>

<body>

    <header>
        <h1>Conversor 2.0</h1>
        <p>
            Usa uma api para pegar a cotação do dólar atualizada e converte o valor informado pelo usuário de reais para dólares.
        </p>
    </header>

    <body>
        <main class="flex-center-items flex-center content">
            <fieldset>
                <legend>Conversor de moedas</legend>
                <form action="index.php" method="post">
                    <label for="valor">Valor: </label>
                    <input type="number" name="valor" id="valor" value="<?= htmlspecialchars($valor) ?>" required>
                    <label for="moeda">Moeda: </label>
                    <select name="moeda" id="moeda">
                        <option value="dolar" <?= $moeda === 'dolar' ? 'selected' : '' ?>>Dólar</option>
                        <option value="real" <?= $moeda === 'real' ? 'selected' : '' ?>>Real</option>
                    </select>
                    <button type="submit">Converter</button>
            </fieldset>
            <div class="border-radius">
                <h2>Resultado da conversão:</h2>
            </div>
            <button class="back-button" onclick="window.history.back()">Voltar</button>
        </main>
    </body>

    <footer>
        <p>
            <a class="link" target="_blank" rel="noopener" href="https://www.estudonauta.com/">
                Estudonauta
            </a>
        </p>
        <p>
            &copy; 2023 - Todos os direitos reservados.
        </p>
    </footer>

</html>
</body>

</html>
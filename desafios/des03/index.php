<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>
<?php
$valor = isset($_POST['valor']) ? $_POST['valor'] : 0;
$moeda = isset($_POST['moeda']) ? $_POST['moeda'] : 'USD';
if ($moeda === 'USD') {
    $valorConvertido = $valor * 5.25; // Exemplo de taxa de conversão
} else if ($moeda === 'BRL') {
    $valorConvertido = $valor / 5.25; // Exemplo de taxa de conversão
}
$valorConvertido = round($valorConvertido, 2); // Arredondar para duas casas decimais

?>

<body>
    <header>
        <h1>Conversor 1.0</h1>
        <p>Usa php simples para converter Real para dólar</p>
    </header>
    <main class="flex-center-items">
        <fieldset>
            <legend>Conversor de moedas</legend>
            <form action="index.php" method="post">
                <label for="valor">Valor: </label>
                <input type="number" name="valor" id="valor" value="<?= htmlspecialchars($valor) ?>" required>
                <label for="moeda">Moeda: </label>
                <select name="moeda" id="moeda">
                    <option value="USD" <?= $moeda === 'USD' ? 'selected' : '' ?>>Dólar para Real</option>
                    <option value="BRL" <?= $moeda === 'BRL' ? 'selected' : '' ?>>Real para Dólar</option>
                </select>
                <button class="action-button" type="submit">Converter</button>
        </fieldset>
        <div class="border">
            <?php
            if ($valorConvertido === null) {
                echo "<p>Por favor, insira um valor válido.</p>";
                exit;
            }
            $locale = 'pt_BR';
            $padrao = numfmt_create($locale, NumberFormatter::CURRENCY);
            echo "<h2>Resultado da conversão:</h2>";
            echo "<p class='text-align-center'>" . numfmt_format_currency($padrao, $valorConvertido, $moeda) . "</p>";
            ?>
        </div>
        <button class="back-button" onclick="window.history.back()">Voltar</button>
    </main>
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
</body>

</html>
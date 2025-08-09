<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor 2.0</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<?php
$inicio = date('m-d-Y', strtotime('-7 days'));
$fim = date('m-d-Y');
// Uma API do Banco Central do Brasil para pegar a cotação do dólar atualizada
// Formata as datas para o formato esperado pela API
$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
$dados = json_decode(file_get_contents($url), true);
$cotação = $dados['value'][0]['cotacaoCompra'] ?? 0;

$valor = isset($_POST['valor']) ? floatval($_POST['valor']) : 0;
$moeda = isset($_POST['moeda']) ? $_POST['moeda'] : 'USD';
$padrão = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
if ($moeda === 'USD') {
    $resultado = $valor * $cotação; // Dólar para Real
    $valorFormatado = numfmt_format_currency($padrão, $valor, 'USD');
    $resultadoFormatado = numfmt_format_currency($padrão, $resultado, 'BRL');
    $mensagem = "$valorFormatado em dólares é igual a $resultadoFormatado em reais.";
} else {
    $resultado = $valor / $cotação; // Real para Dólar
    $valorFormatado = numfmt_format_currency($padrão, $valor, 'BRL');
    $resultadoFormatado = numfmt_format_currency($padrão, $resultado, 'USD');
    $mensagem = "$valorFormatado em reais é igual a $resultadoFormatado em dólares.";
}

?>

<body>

    <header>
        <h1>Conversor 2.0</h1>
        <p>
            Usa uma api do Banco Central do Brasil para pegar a cotação do dólar atualizada e converte o valor informado pelo usuário de reais para dólares.
        </p>
    </header>

    <body>
        <main class="flex-center-items flex-center content">
            <fieldset>
                <legend>Conversor de moedas</legend>
                <p class="text-align-center">
                    <strong>Valor atual do Dólar:</strong> <?= htmlspecialchars(numfmt_format_currency($padrão, $cotação, 'USD')) ?>
                </p>
                <form action="index.php" method="post">
                    <label for="valor">Valor: </label>
                    <input type="number" step="0.01" inputmode="decimal" name="valor" id="valor" value="<?= htmlspecialchars($valor) ?>" required placeholder="Insira o valor">
                    <label for="moeda">Moeda: </label>
                    <select name="moeda" id="moeda">
                        <option value="USD" <?= $moeda === 'USD' ? 'selected' : '' ?>>Dólar</option>
                        <option value="BRL" <?= $moeda === 'BRL' ? 'selected' : '' ?>>Real</option>
                    </select>
                    <button type="submit">Converter</button>
            </fieldset>
            <div class="border">
                <h2>Resultado da conversão:</h2>
                <p class="text-align-center">
                    <?php if ($valor > 0): ?>
                        <?= htmlspecialchars($mensagem) ?>
                    <?php else: ?>
                        Por favor, insira um valor válido para conversão.
                    <?php endif; ?>
                </p>
            </div>
        </main>
    </body>

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

</html>
</body>

</html>
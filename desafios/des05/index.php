<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de número real</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<body>
    <header>
        <h1>
            Analisador de Números Reais
        </h1>
        <p>
            Mostra a parte inteira e a parte decimal de um número real informado pelo usuário.
        </p>
    </header>
    <main class="flex-center-items">
        <div class="margin">
            <fieldset>
                <legend>Informe um Número Real</legend>
                <form action="" method="post">
                    <input type="number" name="valor" id="valor" step="any" placeholder="Digite um número real" required>
                    <button class="action-button" type="submit">Analisar</button>
                </form>
            </fieldset>
        </div>
        <div class="resultado border margin">
            <h2 class="text-align-center">Resultado da Análise</h2>
            <p class="text-align-center">
                <?php
                if (isset($_POST['valor'])) {
                    $valor = (float)$_POST['valor'];
                    $parteInteira = floor($valor);
                    $parteDecimal = abs($valor - $parteInteira);
                    echo "O número informado é: <strong>" . htmlspecialchars($valor) . "</strong><br>";
                    echo "Parte inteira: <strong>" . htmlspecialchars($parteInteira) . "</strong><br>";
                    echo "Parte decimal: <strong>" . htmlspecialchars(number_format($parteDecimal, 3)) . "</strong>";
                } else {
                    echo "Por favor, informe um número real para análise.";
                }
                ?>
            </p>
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
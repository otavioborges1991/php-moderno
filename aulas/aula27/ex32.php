<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rand(), random_int(), min() e max</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<body>
    <header>
        <h1>rand(), random_int(), min() e max</h1>
    </header>
    <main>
        <div class="terminal">
            <header>
                <h4>Terminal. かっこいいです</h1>
            </header>
            <div class="output">
                <p><span class="prompt">otavio@windows:~$</span><?php echo $_SERVER['SCRIPT_NAME']; ?></p>
                <p>
                    As funções <code>rand()</code>, <code>random_int()</code>, <code>min()</code> e <code>max()</code> são usadas para gerar números aleatórios e encontrar valores mínimo e máximo entre eles.
                </p>
                <p>
                    A função <code>rand()</code> gera um número inteiro aleatório, enquanto <code>random_int()</code> gera um número inteiro aleatório seguro para criptografia.
                </p>
                <p>
                    As funções <code>min()</code> e <code>max()</code> são usadas para encontrar o menor e o maior valor entre os números gerados.
                </p>
                <p>
                    Exemplo de uso:
                </p>
                <pre>
                    <code>
                        &lt;?php
                        $integer = rand(1, 100);
                        $float = rand(1, 100) / 10;
                        $randomInt = random_int(1, 100);
                        $minValue = min($integer, $float, $randomInt);
                        $maxValue = max($integer, $float, $randomInt);
                        echo "Número inteiro aleatório: $integer&lt;br&gt;";
                        echo "Número float aleatório: $float&lt;br&gt;";
                        echo "Número inteiro aleatório seguro: $randomInt&lt;br&gt;";
                        echo "Mínimo entre os valores: $minValue&lt;br&gt;";
                        echo "Máximo entre os valores: $maxValue&lt;br&gt;";
                        ?&gt;
                    </code>
                </pre>
                <p>
                    O código acima gera o resultado abaixo:
                </p>
                <br>

                <?php
                $integer = rand(1, 100);
                $float = rand(1, 100) / 10;
                $randomInt = random_int(1, 100);
                $minValue = min($integer, $float, $randomInt);
                $maxValue = max($integer, $float, $randomInt);

                echo "Número inteiro aleatório: $integer<br>";
                echo "Número float aleatório: $float<br>";
                echo "Número inteiro aleatório seguro: $randomInt<br>";
                echo "Mínimo entre os valores: $minValue<br>";
                echo "Máximo entre os valores: $maxValue<br>";
                ?>
            </div>
        </div>
        <br>
        <button class="back-button" onclick="window.history.back()">Voltar</button>
    </main>
    <footer>
        <p>Desenvolvido por Otávio Vinicios Borges</p>
    </footer>
</body>

</html>
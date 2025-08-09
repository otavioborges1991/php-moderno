<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terminal Template</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<body>
    <header>
        <h1>Terminal Template</h1>
    </header>
    <main>
        <div class="terminal">
            <header>
                <h4>Terminal. かっこいい</h1>
            </header>
            <div class="output">
                <p><span class="prompt">otavio@windows:~$</span><?php echo $_SERVER['SCRIPT_NAME']; ?></p>
                <p>
                    Ordem de Precedência:
                </p>
                <ol>
                    <li> () Parenteses</li>
                    <li> ** Potenciação</li>
                    <li> * Multiplicação, / Divisão, % Resto</li>
                    <li> + Adição, - Subtração</li>
                </ol>
                <p>
                    O codigo abaixo demonstra a ordem de precedência dos operadores em PHP.
                </p>
                <pre>
<code>
    &lt;?php
    // cada um desses exemplos imprime um valor diferente
    echo 10 / 3 + 2 ** 2 . "\n";
    echo (10 / 3) + 2 ** 2 . "\n";
    echo 10 / 3 + (2 ** 2) . "\n";
    echo (10 / 3) + (2 ** 2) . "\n";
    // os quatro exemplos acima imprimem o mesmo valor
    echo 10 / (3 + 2) ** 2 . "\n";
    echo (10 / 3 + 2) ** 2 . "\n";
    echo (10 / (3 + 2)) ** 2 . "\n";]
    &gt;
</code>
                </pre>
                <?php
                // cada um desses exemplos imprime um valor diferente
                echo 10 / 3 + 2 ** 2 . "<br>";
                echo (10 / 3) + 2 ** 2 . "<br>";
                echo 10 / 3 + (2 ** 2) . "<br>";
                echo (10 / 3) + (2 ** 2) . "<br>";
                // os quatro exemplos acima imprimem o mesmo valor
                echo 10 / (3 + 2) ** 2 . "<br>";
                echo (10 / 3 + 2) ** 2 . "<br>";
                echo (10 / (3 + 2)) ** 2 . "<br>";
                ?>
            </div>
        </div>
        <br>
    </main>
    <footer>
        <button class="back-button" onclick="window.history.back()">Voltar</button>
        <p>Desenvolvido por Otávio Vinicios Borges</p>
    </footer>
</body>

</html>
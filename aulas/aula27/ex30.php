<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 30</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<body>
    <header>
        <h1>ceil(), floor() e round()</h1>
    </header>
    <main>
        <div class="terminal">
            <header>
                <h4>Terminal. かっこいい</h1>
            </header>
            <div class="output">
                <p><span class="prompt">otavio@windows:~$</span><?php echo $_SERVER['SCRIPT_NAME']; ?></p>
                <pre>
                    <code>
                        &lt;?php
                        $PI = 3.14159265358979323846;
                        echo "O valor de PI é: $PI\n";
                        echo "Arredondando para cima: " . ceil($PI) . "&lt;br&gt;";
                        echo "Arredondando para baixo: " . floor($PI) . "&lt;br&gt;";
                        echo "Arredondando para o inteiro mais próximo: " . round($PI) . "&lt;br&gt;";
                        echo "Arredondando para duas casas decimais: " . round($PI, 2) . "&lt;br&gt;";
                        echo "Arredondando para uma casa decimal: " . round($PI, 1) . "&lt;br&gt;";
                        ?&gt;
                    </code>
                </pre>
                <?php
                $PI = 3.14159265358979323846;
                echo "O valor de PI é: $PI\n";
                echo "Arredondando para cima: " . ceil($PI) . "<br>";
                echo "Arredondando para baixo: " . floor($PI) . "<br>";
                echo "Arredondando para o inteiro mais próximo: " . round($PI) . "<br>";
                echo "Arredondando para duas casas decimais: " . round($PI, 2) . "<br>";
                echo "Arredondando para uma casa decimal: " . round($PI, 1) . "<br>";
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
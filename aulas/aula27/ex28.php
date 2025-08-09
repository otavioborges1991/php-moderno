<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções aritméticas</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<body>
    <header>
        <h1>Funções aritméticas</h1>
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
                        $valor_aboluto = abs(-10);
                        echo $valor_aboluto . "&lt;br&gt;";
                        ?&gt;
                    </code>
                </pre>

                <?php
                $valor_aboluto = abs(-10);
                echo $valor_aboluto . "<br>";
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
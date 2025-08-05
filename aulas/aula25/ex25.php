<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos em strings</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<body>
    <header>
        <h1>Operadores Aritméticos em strings</h1>
    </header>
    <main>
        <div class="terminal">
            <header>
                <h4>Terminal. かっこいいです</h1>
            </header>
            <div class="output">
                <p><span class="prompt">otavio@windows:~$</span><?php echo $_SERVER['SCRIPT_NAME']; ?></p>
                <p>
                    &lt;?php
                    $resultado = "3" + "3";<br>
                    var_dump($resultado); <br>
                    $resultado = "3" + 2;<br>
                    var_dump($resultado);<br>
                    $resultado = 1 + 1;<br>
                    var_dump($resultado);<br>
                    ?>&gt;
                </p>
                <?php
                $resultado = "3" + "3";
                var_dump($resultado);
                echo "<br>";
                $resultado = "3" + 2;
                var_dump($resultado);
                echo "<br>";
                $resultado = 1 + 1;
                var_dump($resultado);
                echo "<br>";
                $resultado = "30 dólares" + "101 dalmatas";
                echo $resultado;
                echo "<br>";

                ?>
            </div>
        </div>
        <br>
        <button class="back-button"  onclick="window.history.back()">Voltar</button>
    </main>
    <footer>
        <p>Desenvolvido por Otávio Vinicios Borges</p>
    </footer>
</body>

</html>
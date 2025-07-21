<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shot Tag php</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<body>
    <header>
        <h1>Shot tag php &lt;?= ?&gt;</h1>
    </header>
    <main>

        <div class="terminal">
            <header>
                <h4>Terminal. かっこいい</h1>
            </header>
            <p><span class="prompt">otavio@windows:~$</span><?php echo $_SERVER['SCRIPT_NAME']; ?></p>
            <?php
            echo "Shot tag: <br>";
            echo "<code>&lt;?='Olá, mundo' ?&gt;</code> Resulta em: <br>";
            ?>
            <?= "Olá, mundo!<br>" ?>
            <?php
            echo "é uma forma abreviada de escrever o comando <code>echo</code> no PHP. É uma maneira mais concisa e legível de imprimir valores na tela.";
            ?>
        </div>
        <br>
        <button onclick="window.history.back()">Voltar</button>
    </main>
    <footer>
        <p>Desenvolvido por Otávio Vinicios Borges</p>
    </footer>
</body>

</html>
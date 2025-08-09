<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKIE</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<body>
    <header>
        <h1>Super Global COOKIE</h1>
        <p>Alem de uma demonstração destas super Globais, há uma demonstração de criar cookies</p>
    </header>
    <main>
        <div class="terminal">
            <header>
                <h4>Terminal. かっこいいです</h1>
            </header>
            <div class="output">
                <p><span class="prompt">otavio@windows:~$</span><?php echo $_SERVER['SCRIPT_NAME']; ?></p>
                <?php
                // a super global _ENV 
                echo "<br><br>";
                foreach (getenv() as $c => $v) {
                    echo "$c - $v<br>";
                }
                echo "<br><br>";
                echo "Super Global SERVER<br>";
                foreach ($_SERVER as $key => $value) {
                    echo "  $key: $value<br>";
                }
                ?>
            </div>
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
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
            <p><span class="prompt">otavio@windows:~$</span><?php echo $_SERVER['SCRIPT_NAME']; ?></p>
            <?php
            date_default_timezone_set('America/Sao_Paulo');
            echo "Hoje é dia " . date("d/m/Y") . "<br>";
            echo "Hora atual: " . date("H:i:s") . "<br>";
            ?>
        </div>
        <br>
    </main>
    <footer>
        <button class="back-button" onclick="window.history.back()">Voltar</button>
        <p>Desenvolvido por Otávio Vinicios Borges</p>
    </footer>
</body>

</html>
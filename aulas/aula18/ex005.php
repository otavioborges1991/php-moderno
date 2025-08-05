<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asp Tag</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<body>
    <header>
        <h1>Shot open tag &lt;% %&gt;</h1>
    </header>
    <main>

        <div class="terminal">
            <header>
                <h4>Terminal. かっこいい</h1>
            </header>
            <p><span class="prompt">otavio@windows:~$</span><?php echo $_SERVER['SCRIPT_NAME']; ?></p>
            <?php
            echo "Asp tag: <br>";
            echo "<% echo 'Olá Mundo!'; %>";
            echo "<br> também precisa ser habilitado no php.ini, alterando a diretiva <strong>asp_tags</strong> para <strong>On</strong>.";
            ?>
        </div>
        <br>
        <button class="back-button"  onclick="window.history.back()">Voltar</button>
    </main>
    <footer>
        <p>Desenvolvido por Otávio Vinicios Borges</p>
    </footer>
</body>

</html>
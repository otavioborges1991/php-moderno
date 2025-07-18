<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shot Open Tag</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<body>
    <header>
        <h1>Shot open tag &lt;? ?&gt;</h1>
    </header>
    <main>

        <div class="terminal">
            <header>
                <h4>Terminal</h1>
            </header>
            <p><span class="prompt">otavio@windows:~$</span><?php echo $_SERVER['SCRIPT_NAME']; ?></p>
            <?php
            echo "short open tag tem que ser habilitado no php.ini, caso contrário não funcionará.\n";
            echo "<pre>&lt;? echo 'olá, mundo'?&gt;</pre>"
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
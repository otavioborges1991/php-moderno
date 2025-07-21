<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O tag script</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<body>
    <header>
        <h1>Tag script com paramêtro language="php"</h1>
    </header>
    <main>

        <div class="terminal">
            <header>
                <h4>Terminal. かっこいい</h1>
            </header>
            <p><span class="prompt">otavio@windows:~$</span><?php echo $_SERVER['SCRIPT_NAME']; ?></p>
            <?php
            echo "<pre>&lt;script language='php'&gt;\necho 'Olá Mundo!\n'&lt;/script&gt;</pre>";
            echo "Este tipo de tag acima não é mais recomendado, pois o PHP já é interpretado por padrão.";
            echo "<br>Você pode usar a tag padrão do PHP assim:";
            echo "<pre>&lt;?php\necho 'Olá Mundo!';\n?&gt;</pre>";
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
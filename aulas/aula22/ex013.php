<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<body>
    <header>
        <h1>Strings</h1>
    </header>
    <main>

        <div class="terminal">
            <header>
                <h4>Terminal. かっこいい</h1>
            </header>
            <p><span class="prompt">otavio@windows:~$</span><?php echo $_SERVER['SCRIPT_NAME']; ?></p>
            <pre>
<code>
&lt;?php
$nome = "Otávio Vinicios Borges";
echo "Seu nome é $nome" . "&lt;br&gt;";
echo 'Seu nome é $nome' . "&lt;br&gt;";
echo "PHP \u{1F418}&lt;br&gt;"; // String com aspas duplas são interpretadas
echo 'PHP \u{1F418}&lt;br&gt;'; // String com aspas simples não são interpretadas
// interpretar \u{1F418} resultará em um emoji de elefante
echo "Teu nome é " . $nome . "<br>";
echo 'Teu nome é ' . $nome . "<br>";
echo "Teu nome entre aspas duplas é: \"$nome\"<br>";
?&gt;
</code>
</pre>
            <?php
            $nome = "Otávio Vinicios Borges";
            echo "Seu nome é $nome" . "<br>";
            echo 'Seu nome é $nome' . "<br>";
            echo "PHP \u{1F418}<br>"; // String com aspas duplas são interpretadas
            echo 'PHP \u{1F418}<br>'; // String com aspas simples não são interpretadas
            // interpretar \u{1F418} resultará em um emoji de elefante
            echo "Teu nome é " . $nome . "<br>";
            echo 'Teu nome é ' . $nome . "<br>";
            echo "Teu nome entre aspas duplas é: \"$nome\"<br>";
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
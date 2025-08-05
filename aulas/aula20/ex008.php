<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e constantes</title>
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
            // Exemplo de variáveis em PHP
            // Definindo variáveis
            echo "Exemplo de variáveis em PHP<br>";
            ?>
            <pre>
                <code>
                    &lt;?php
                    $nome = "Otávio Vinicios Borges";
                    $idade = 33;
                    $peso = 60.5;
                    const NASCIMENTO = "1991-29-07";
                    echo "$nome tem $idade anos, pesa $peso kg e nasceu em $nascimento.";
                    ?&gt;
                </code>
            </pre>
            <p>
                O código acima define três variáveis e uma constante: <code>$nome</code>,
                <code>$idade</code>, <code>$peso</code> e <code>$NASCIMENTO</code>.
            </p>
            <p>
                Em seguida, exibe a mensagem abaixo, formatada com os valores dessas variáveis:
            </p>
            <?php
            $nome = "Otávio Vinicios Borges";
            $idade = 33;
            $peso = 60.5;
            const NASCIMENTO = "1991-29-07";
            echo "$nome tem $idade anos, pesa $peso kg e nasceu em " . NASCIMENTO . ".";
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações Aritméticas</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<body>
    <header>
        <h1>Operações Aritméticas.</h1>
    </header>
    <main>
        <div class="terminal">
            <header>
                <h4>Terminal. かっこいい</h1>
            </header>
            <div class="output">
                <p><span class="prompt">otavio@windows:~$</span><?php echo $_SERVER['SCRIPT_NAME']; ?></p>
                <p>
                    Operadores Aritméticos em PHP:
                </p>
                <ul>
                    <li> + Adição</li>
                    <li> - Subtração</li>
                    <li> * Multiplicação</li>
                    <li> / Divisão Real</li>
                    <li> % Resto de Divisão Inteira</li>
                    <li> ** Potencia</li>
                </ul>
                <?php
                $numero1 = 10;
                $numero2 = 5;
                $soma = $numero1 + $numero2;
                $subtracao = $numero1 - $numero2;
                $multiplicacao = $numero1 * $numero2;
                $divisao = $numero1 / $numero2;
                $resto = $numero1 % $numero2;
                $potencia = $numero1 ** 2;
                echo "Número 1: $numero1 <br>";
                echo "Número 2: $numero2 <br>";
                echo "Soma: $soma <br>";
                echo "Subtração: $subtracao <br>";
                echo "Multiplicação: $multiplicacao <br>";
                echo "Divisão: $divisao <br>";
                echo "Resto da Divisão: $resto <br>";
                echo "Potência: $potencia <br>";
                echo "<br>";
                ?>
                <p>
                    <strong>Observação:</strong> Em PHP, ao realizar operações com strings que contêm números, o PHP tenta converter as strings em números. No entanto, se as strings não forem numéricas, o resultado pode ser inesperado.
                </p>

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
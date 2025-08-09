<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções aritméticas</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<body>
    <header>
        <h1>Funções aritméticas</h1>
    </header>
    <main>
        <div class="terminal">
            <header>
                <h4>Terminal. かっこいい</h1>
            </header>
            <div class="output">
                <p><span class="prompt">otavio@windows:~$</span><?php echo $_SERVER['SCRIPT_NAME']; ?></p>
                <pre>
                    <code>
                        &lt;?php
                        $valor = 254;
                        $binario = base_convert($valor, 10, 2);
                        $hexadecimal = base_convert($valor, 10, 16);
                        $octal = base_convert($valor, 10, 8);
                        echo "O valor $valor em binário é: $binario&lt;br&gt;";
                        echo "O valor $valor em hexadecimal é: $hexadecimal&lt;br&gt;";
                        echo "O valor $valor em octal é: $octal&lt;br&gt;";
                        ?&gt;
                    </code>
                </pre>

                <?php
                $valor = 254;
                $binario = base_convert($valor, 10, 2);
                $hexadecimal = base_convert($valor, 10, 16);
                $octal = base_convert($valor, 10, 8);
                echo "O valor $valor em binário é: $binario<br>";
                echo "O valor $valor em hexadecimal é: $hexadecimal<br>";
                echo "O valor $valor em octal é: $octal<br>";
                ?>
                <pre>
                    <code>
                        &lt;?php
                        $valor = 1101;
                        $decimal = base_convert($valor, 2, 10);
                        $hexadecimal = base_convert($valor, 2, 16);
                        $octal = base_convert($valor, 2, 8);
                        echo "O valor $valor em decimal é: $binario&lt;br&gt;";
                        echo "O valor $valor em hexadecimal é: $hexadecimal&lt;br&gt;";
                        echo "O valor $valor em octal é: $octal&lt;br&gt;";
                        ?&gt;
                    </code>
                </pre>
                <?php
                $valor = 1101;
                $decimal = base_convert($valor, 2, 10);
                $hexadecimal = base_convert($valor, 2, 16);
                $octal = base_convert($valor, 2, 8);
                echo "O valor $valor em decimal é: $decimal<br>";
                echo "O valor $valor em hexadecimal é: $hexadecimal<br>";
                echo "O valor $valor em octal é: $octal<br>";
                ?>
                <pre>
                    <code>
                        &lt;?php
                        $valor = 0x1f;
                        $decimal = base_convert($valor, 16, 10);
                        $binario = base_convert($valor, 16, 2);
                        $octal = base_convert($valor, 16, 8);
                        echo "O valor $valor em decimal é: $decimal&lt;br&gt;";
                        echo "O valor $valor em binario é: $binario&lt;br&gt;";
                        echo "O valor $valor em octal é: $octal&lt;br&gt;";
                        ?&gt;
                    </code>
                </pre>

                <?php
                $valor = 0x1f;
                $decimal = base_convert($valor, 16, 10);
                $binario = base_convert($valor, 16, 2);
                $octal = base_convert($valor, 16, 8);
                echo "O valor $valor em decimal é: $decimal<br>";
                echo "O valor $valor em binario é: $binario<br>";
                echo "O valor $valor em octal é: $octal<br>";
                ?>
                <pre>
                    <code>
                        &lt;?php
                        $valor = 075;
                        $decimal = base_convert($valor, 16, 10);
                        $binario = base_convert($valor, 16, 2);
                        $hexadecimal = base_convert($valor, 16, 8);
                        echo "O valor $valor em decimal é: $decimal&lt;br&gt;";
                        echo "O valor $valor em binario é: $binario&lt;br&gt;";
                        echo "O valor $valor em hexadecimal é: $hexadecimal&lt;br&gt;";
                        ?&gt;
                    </code>
                </pre>

                <?php
                $valor = 075;
                $decimal = base_convert($valor, 8, 10);
                $binario = base_convert($valor, 8, 2);
                $hexadecimal = base_convert($valor, 8, 16);
                echo "O valor $valor em decimal é: $decimal<br>";
                echo "O valor $valor em binario é: $binario<br>";
                echo "O valor $valor em hexadecimal é: $hexadecimal<br>";
                ?>
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
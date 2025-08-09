<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hypot(), intdiv() e pow() </title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<body>
    <header>
        <h1>hypot() intdiv() e pow()</h1>
    </header>
    <main>
        <div class="terminal">
            <header>
                <h4>Terminal. かっこいいです</h1>
            </header>
            <div class="output">
                <p><span class="prompt">otavio@windows:~$</span><?php echo $_SERVER['SCRIPT_NAME']; ?></p>
                <p>
                    As funções <code>hypot()</code>, <code>intdiv()</code> e <code>pow()</code> são funções matemáticas do PHP.
                    <br>
                    A função <code>hypot()</code> calcula a hipotenusa de um triângulo retângulo dado os catetos.
                    <br>
                    A função <code>intdiv()</code> realiza a divisão inteira entre dois números.
                    <br>
                    A função <code>pow()</code> eleva um número a uma potência especificada.
                    <br>
                    Veja abaixo exemplos de uso dessas funções:
                </p>

                <pre>
                    <code>
$cateto_oposto = 3;
$cateto_adjacente = 4;
$hipotenusa = hypot($cateto_oposto, $cateto_adjacente);
echo "&lt;p&gt;Hipotenusa de um triângulo com catetos $cateto_oposto e $cateto_adjacente: &lt;strong&gt;$hipotenusa&lt;/strong&gt;&lt;/p&gt;";
$dividendo = 10;
$divisor = 3;
$resultado_divisao_inteira = intdiv($dividendo, $divisor);
echo "&lt;p&gt;Divisão inteira de $dividendo por $divisor: &lt;strong&gt;$resultado_divisao_inteira&lt;/strong&gt;&lt;/p&gt;";
$base = 2;
$expoente = 3;
$resultado_potencia = pow($base, $expoente);
echo "&lt;p&gt;$base elevado a $expoente: &lt;strong&gt;$resultado_potencia&lt;/strong&gt;&lt;/p&gt;";
                    </code>
                </pre>

                <?php
                $cateto_oposto = 3;
                $cateto_adjacente = 4;
                $hipotenusa = hypot($cateto_oposto, $cateto_adjacente);
                echo "<p>Hipotenusa de um triângulo com catetos $cateto_oposto e $cateto_adjacente: <strong>$hipotenusa</strong></p>";

                $dividendo = 10;
                $divisor = 3;
                $resultado_divisao_inteira = intdiv($dividendo, $divisor);
                echo "<p>Divisão inteira de $dividendo por $divisor: <strong>$resultado_divisao_inteira</strong></p>";

                $base = 2;
                $expoente = 3;
                $resultado_potencia = pow($base, $expoente);
                echo "<p>$base elevado a $expoente: <strong>$resultado_potencia</strong></p>";
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
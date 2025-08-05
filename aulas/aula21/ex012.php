<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exponenciação</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<body>
    <header>
        <h1>Exponenciação</h1>
    </header>
    <main>
        <div class="terminal">
            <header>
                <h4>Terminal. かっこいい</h1>
            </header>
            <p><span class="prompt">otavio@windows:~$</span><?php echo $_SERVER['SCRIPT_NAME']; ?></p>
            <p>
                Em php, a exponenciação pode ser feita de várias maneiras. A forma mais comum é usando o operador `**`, mas também é possível usar a notação científica com `e` ou `E`, ou ainda a função `pow()`. Veja os exemplos abaixo:
            </p>
            <p>
                O operador `**` é usado para elevar um número a uma potência. Por exemplo, `3 ** 2` é igual a `9`, pois `3` elevado a `2` é `9`.
            </p>
            <p>A notação científica com `e` ou `E` também pode ser usada para representar números muito grandes ou muito pequenos. Por exemplo, `3e2` é igual a `300`, pois `3` multiplicado por `10` elevado a `2` é `300`. Da mesma forma, `3e-2` é igual a `0.03`, pois `3` multiplicado por `10` elevado a `-2` é `0.03`.</p>
            <pre>
<code>
&lt;php
echo 3e2 &lt;br&gt;; // Exponenciação
echo 3e-2 &lt;br&gt;; // Exponenciação negativa
echo 3e+2 &lt;br&gt;; // Exponenciação positiva
echo 3E2 &lt;br&gt;; // Exponenciação com E maiúsculo
echo 3E-2 &lt;br&gt;; // Exponenciação negativa com E maiúsculo
echo 3E+2 &lt;br&gt;; // Exponenciação positiva com E maiúsculo
echo pow(3, 2) &lt;br&gt;; // Exponenciação usando a função pow()
echo pow(3, &lt;br&gt;; // Exponenciação negativa usando a função pow()
echo 3 ** 2 . &lt;br&gt;; // Exponenciação usando o operador **
echo 3 ** -2 . &lt;br&gt;; // Exponenciação negativa usando o
?&gt;
</code>
            </pre>
            <?php
            echo 3e2 . "<br>"; // Exponenciação
            echo 3e-2 . "<br>"; // Exponenciação negativa
            echo 3e+2 . "<br>"; // Exponenciação positiva
            echo 3E2 . "<br>"; // Exponenciação com E maiúsculo
            echo 3E-2 . "<br>"; // Exponenciação negativa com E maiúsculo
            echo 3E+2 . "<br>"; // Exponenciação positiva com E maiúsculo
            echo pow(3, 2) . "<br>"; // Exponenciação usando a função pow()
            echo pow(3, -2) . "<br>"; // Exponenciação negativa usando a função pow()
            echo 3 ** 2 . "<br>"; // Exponenciação usando o operador **
            echo 3 ** -2 . "<br>"; // Exponenciação negativa usando o
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
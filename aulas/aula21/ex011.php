<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos 2</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<body>
    <header>
        <h1>Tipos primitivos 2</h1>
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
                    $numero = 0x1A; // hexadecimal
                    $binario = 0b101010; // binário
                    $octal = 012; // octal
                    $array = ['maçã', 'banana', 'laranja']; // array
                    $json = json_encode($array); // JSON
                    $data = new DateTime('2023-10-01'); // DateTime object
                    echo "Número hexadecimal: $numero";
                    echo "Número binário: $binario";
                    echo "Número octal: $octal";
                    echo "Array: " . implode(', ', $array);
                    echo "JSON: $jso;
                    echo "Data: " . $data->format('Y-m-d');
                    echo "Data formatada: " . $data->format('d/m/Y');
                    echo "Timestamp: " . $data->getTimestamp();
                    ?&gt;
                </code>
            </pre>
            <?php
            $numero = 0x1A; // hexadecimal prefix
            // hexadecimal prefix is 0x in PHP
            $binario = 0b101010; // binário prefix
            // binário prefix is 0b in PHP
            $octal = 012; // octal prefix
            // octal prefix is 0 in PHP
            $array = ['maçã', 'banana', 'laranja']; // array
            $json = json_encode($array); // JSON
            $data = new DateTime('2023-10-01'); // DateTime object
            echo "Número hexadecimal: $numero<br>";
            echo var_dump($numero) . "<br>";
            echo "Número binário: $binario<br>";
            echo var_dump($binario) . "<br>";
            echo "Número octal: $octal<br>";
            echo var_dump($octal) . "<br>";
            echo "Array: " . implode(', ', $array) . "<br>";
            echo var_dump($array) . "<br>";
            echo "JSON: $json<br>";
            echo var_dump($json) . "<br>";
            echo "Data: " . $data->format('Y-m-d') . "<br>";
            echo var_dump($data) . "<br>";
            echo "Data formatada: " . $data->format('d/m/Y') . "<br>";
            echo "Timestamp: " . $data->getTimestamp() . "<br>";
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<body>
    <header>
        <h1>Tipos permitivos</h1>
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
                    $nome = "Otávio Vinicios Borges"; // string
                    $idade = 20; // int
                    $altura = 1.80; // float
                    $casado = false; // bool
                    $filhos = null; // null
                    $nascimento = new DateTime(); // object
                    $carro = (object) [
                        'marca' => 'Toyota',
                        'modelo' => 'Corolla',
                        'ano' => 2020
                    ]; // object
                    echo "Nome: $nome\n";
                    echo "Idade: $idade\n";
                    echo "Altura: $altura\n";
                    echo "Casado: " . ($casado ? 'Sim' : 'Não') . "\n";
                    echo "Filhos: " . ($filhos ?? 'Nenhum') . "\n";
                    echo "Nascimento: " . $nascimento->format('Y-m-d H:i:s') . "\n";
                    echo "Carro: {$carro->marca} {$carro->modelo} ({$carro->ano})\n";
                    ?&gt;
                </code>
            </pre>
            <?php
            $nome = "Otávio Vinicios Borges"; // string
            $idade = 33; // int
            $altura = 1.80; // float
            $casado = false; // bool
            $filhos = null; // null
            $nascimento = new DateTime(); // object
            $carro = (object) [
                'marca' => 'Toyota',
                'modelo' => 'Corolla',
                'ano' => 2020
            ]; // object
            echo "Nome: $nome<br>";
            echo "Idade: $idade<br>";
            echo "Altura: $altura<br>";
            echo "Casado: " . ($casado ? 'Sim' : 'Não') . "<br>";
            echo "Filhos: " . ($filhos ?? 'Nenhum') . "<br>";
            echo "Nascimento: " . $nascimento->format('Y-m-d H:i:s') . "<br>";
            echo "Carro: {$carro->marca} {$carro->modelo} ({$carro->ano})<br>";
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
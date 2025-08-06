<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKIE e SESSION</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<body>
    <header>
        <h1>Super Global COOKIE e SESSION</h1>
        <p>Alem de uma demonstração destas super Globais, há uma demonstração de como editalas</p>
    </header>
    <main>
        <div class="terminal">
            <header>
                <h4>Terminal. かっこいいです</h1>
            </header>
            <div class="output">
                <p><span class="prompt">otavio@windows:~$</span><?php echo $_SERVER['SCRIPT_NAME']; ?></p>
                <?php
                // Verifica se o cookie já foi definido
                /*
                if (isset($_COOKIE['nome'])) {
                    $nome = htmlspecialchars($_COOKIE['nome']);
                    echo "Olá, $nome!<br>";
                } */
                date_default_timezone_set('America/Sao_Paulo');
                $dias = [
                    'Sunday' => 'domingo',
                    'Monday' => 'segunda-feira',
                    'Tuesday' => 'terça-feira',
                    'Wednesday' => 'quarta-feira',
                    'Thursday' => 'quinta-feira',
                    'Friday' => 'sexta-feira',
                    'Saturday' => 'sábado'
                ];
                setcookie("dia-da-semana", date("l"), time() + 3600); // Define um cookie que expira em 1 hora
                echo "Super Global COOKIE: <br>";
                if (isset($_COOKIE['dia-da-semana'])) {
                    $diaIngles = $_COOKIE['dia-da-semana'];
                    $diaPortugues = $dias[$diaIngles] ?? $diaIngles;
                    echo "Hoje é $diaPortugues!<br>";
                }
                echo "<br>Cookies disponíveis: <br>";
                echo "<pre>";
                // Exibe todos os cookies disponíveis
                foreach ($_COOKIE as $key => $value) {
                    echo "  $key: $value<br>";
                }
                echo "</pre><br>";
                var_dump($_COOKIE);
                echo "<br><br>Super Global Session, antes de ser definida<br>";
                var_dump($_SESSION);
                session_start();
                $_SESSION['teste'] = 'Funciona!';
                echo "<br><br>Super Global Session, depois de session_start() e uma definição de \$_SESSION<br>";
                var_dump($_SESSION);

                echo "<br><br>Super Global ENV<br>";
                var_dump($_ENV);

                ?>
            </div>
        </div>
        </div>
        <br>
        <button onclick="window.history.back()">Voltar</button>
    </main>
    <footer>
        <p>Desenvolvido por Otávio Vinicios Borges</p>
    </footer>
</body>

</html>
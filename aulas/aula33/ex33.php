<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Globais</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<body>
    <header>
        <h1>
            Super Globais
        </h1>
    </header>
    <main class="flex-center-items">
        <div class="flex-row-center">
            <div class="border">
                <h2>Super Global POST</h2>
                <form action="ex33.php" method="post">
                    <label for="nome">Digite seu nome:</label>
                    <input type="text" name="nome" id="nome" required>
                    <button type="submit">Enviar</button>
                </form>

            </div>
            <div class="resultado border">
                <p>
                    <?php
                    if (isset($_POST['nome'])) {
                        $nome = htmlspecialchars($_POST['nome']);
                        echo "Olá, $nome!";
                    }
                    var_dump($_POST);
                    ?>
                </p>


            </div>
        </div>
        <div class="flex-row-center">
            <div class="border">
                <h2>Super Global GET</h2>
                <form action="ex33.php" method="get">
                    <label for="nome">Digite seu nome:</label>
                    <input type="text" name="nome" id="nome" required>
                    <button type="submit">Enviar</button>
                </form>

            </div>
            <div class="border resultado">
                <p>
                    <?php
                    if (isset($_GET['nome'])) {
                        $nome = htmlspecialchars($_GET['nome']);
                        echo "Olá, $nome!";
                    }
                    var_dump($_GET);
                    ?>
                </p>

            </div>

        </div>
        <div class="flex-row-center">
            <div class="border ">
                <h2>Super Global REQUEST</h2>
                <form action="ex33.php" method="post">
                    <label for="nome">Digite seu nome:</label>
                    <input type="text" name="nome" id="nome" required>
                    <button type="submit">Enviar</button>
                </form>
            </div>
            <div class="resultado border">
                <p>
                    <?php
                    if (isset($_REQUEST['nome'])) {
                        $nome = htmlspecialchars($_REQUEST['nome']);
                        echo "Olá, $nome!";
                    }
                    var_dump($_REQUEST);
                    ?>
                </p>
            </div>
        </div>

    </main>
    <footer>
        <p>
            <a class="link" target="_blank" rel="noopener" href="https://www.estudonauta.com/">
                Estudonauta
            </a>
        </p>
        <p>
            &copy; 2023 - Todos os direitos reservados.
        </p>
    </footer>
</body>

</html>
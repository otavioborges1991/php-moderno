<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 34</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>
<?php
$file = $_SERVER['PHP_SELF'];
$num1 = isset($_POST['num1']) ? (float)$_POST['num1'] : 0;
$num2 = isset($_POST['num2']) ? (float)$_POST['num2'] : 0;
?>


<body>
    <header>
        <h1>
            Formulário Retroalimentos.
        </h1>
    </header>
    <main class="flex-center-items">
        <header>
            <h2 class="text-align-center">Exercicio</h2>
            <p class="text-align-center">Esta pagina é um documento php que envia um formulário para ela mesma</p>
        </header>
        <fieldset>
            <legend>Formulário Retroalimento</legend>
            <h2>Somador de valores</h2>
            <form action="<?php echo $file ?>" method="post">
                <label for="num1">Número 1: </label>
                <input type="number" name="num1" id="num1" required value="<?= $num1 ?>">
                <label for="num2">Número 2: </label>
                <input type="number" name="num2" id="num2" required value="<?= $num2 ?>">
                <input class="action-button" type="submit" value="Calcular">
            </form>
        </fieldset>
        <div id="resultado" class="resultado">
            <h2>Resultado</h2>
            <p class="text-align-center">
                <?php
                echo "O resultado é " . ($num1 + $num2);
                ?>
            </p>
        </div>
    </main>
    <footer class="flex-row-center">
        <button class="back-button" onclick="window.history.back()">Voltar</button>
        <div>
            <p>
                <a class="link" target="_blank" rel="noopener" href="https://www.estudonauta.com/">
                    Estudonauta
                </a>
            </p>
            <p>
                &copy; 2023 - Todos os direitos reservados.
            </p>
        </div>
    </footer>
    </script>
</body>

</html>
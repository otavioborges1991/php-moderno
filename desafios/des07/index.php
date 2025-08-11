<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 07</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>
<?php
$salario_minimo = 1528;

?>

<body>
    <header>
        <h1>
            Desafio 7 - Analisador de Salario
        </h1>
    </header>
    <main class="flex-center-items">
        <fieldset>
            <legend>Salário Minimo</legend>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <label for="salario">Salário</label>
                <input type="number" name="salario" id="salario" required placeholder="1.518,00">
                <input class="action-button" type="submit" value="Calcular">
            </form>
        </fieldset>
        <div class="resultado">
            <?php
            $salario = $_POST['salario'] ?? null;
            if (isset($salario)) {
                $salarios_minimos = intdiv($salario, $salario_minimo);
                $resto = $salario % $salario_minimo;
                $frase = $salarios_minimos >= 2 ? "salarios minimos" : "salario minimo";
                echo "Seu salário é \$$salario<br> é o equivalente a $salarios_minimos $frase<br>mais \$$resto reais.";
            } else {
                echo "Esperando formulário";
            }
            ?>
        </div>
    </main>
    <footer>
        <button class="back-button" onclick="window.history.back()">Voltar</button>
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
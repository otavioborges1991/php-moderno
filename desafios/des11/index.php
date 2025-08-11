<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<body>
    <header>
        <h1>
            Reajuste de preços
        </h1>
    </header>
    <main class="flex-center-items">
        <fieldset>
            <legend>Reajuste</legend>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="margin">
                    <label for="valor">Preço: </label>
                    <input class="short" type="number" required name="valor" id="valor">
                    <label for="reajuste">Reajuste em <span id="sliderValue">50</span>%</label>

                    <input type="range" name="reajuste" step="0.01" id="reajuste" min="0" max="100" value="50" oninput="updateValue(this.value)" required>
                </div>
                <input class="action-button" type="submit" value="Calcular">
            </form>
        </fieldset>
        <div class="resultado">
            <?php
            $reajuste = $_POST['reajuste'] ?? 0;
            $valor = $_POST['valor'] ?? 0;
            $novo_valor = $valor + ($valor * ($reajuste / 100));

            echo "Com um valor original de $valor, e um reajuste de $reajuste% o preço fica $novo_valor";


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
    <script>
        function updateValue(value) {
            document.getElementById('sliderValue').textContent = value;
        }
    </script>
</body>

</html>
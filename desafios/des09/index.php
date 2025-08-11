<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<body>
    <header>
        <h1>
            Médias aritiméticas, simples e ponderada
        </h1>
        <p>
            media simples é a soma das notas dividias pela quantidade de notas
        </p>
        <p>
            media ponderada multiplicada cada nota pelo seu peso e as soma. <br>
            então divide o total pela soma de seus pesos
        </p>
    </header>
    <main class="flex-center-items">
        <fieldset>
            <legend>Valores</legend>
            <form action="" method="post">
                <div class="margin">
                    <label for="peso1">Peso 1</label>
                    <input class="short" step="0.1" type="number" name="peso1" id="peso1" required>
                    <label for="media1">Nota 1</label>
                    <input class="short" step="0.1" type="number" name="nota1" id="nota1" required>
                    <label for="peso2">Peso 2</label>
                    <input class="short" step="0.1" type="number" name="peso2" id="peso2" required>
                    <label for="media2">Nota 2</label>
                    <input class="short" step="0.1" type="number" name="nota2" id="nota2" required>
                </div>
                <input type="submit" value="Enviar">
            </form>
        </fieldset>
        <div class="resultado">
            <h2>Médias</h2>
            <?php
            $nota1 = $_POST['nota1'] ?? 0;
            $nota2 = $_POST['nota2'] ?? 0;
            $peso1 = $_POST['peso1'] ?? 0;
            $peso2 = $_POST['peso2'] ?? 0;
            $media_simples = ($nota1 + $nota2) / 2;
            if ($peso1 != 0 && $peso2 != 0 && $nota1 != 0 && $nota2 != 00) {
                $media_ponderada = number_format((($nota1 * $peso1) + ($nota2 * $peso2)) / ($peso1 + $peso2), 2);
                echo "Com as notas <strong>$nota1</strong> e <strong>$nota2</strong><br>Sua média simples é <strong>$media_simples</strong>.<br>E sua média ponderada é <strong>$media_ponderada</strong>.";
            } else {
                echo "Informe números não zero";
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
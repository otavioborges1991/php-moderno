<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<body>
    <header>
        <h1>Antecessor e Sucessor</h1>
        <p>Usa php simples para os números antecessores e sucessores de um outro número</p>
    </header>
    <main class="flex-center-items flex-center-content">
        <h1>Resultado</h1>
        <fieldset>
            <p>O antecessor é: <strong><?php echo $_GET['numero'] - 1; ?></strong></p>
            <p>O sucessor é: <strong><?php echo $_GET['numero'] + 1; ?></strong></p>
        </fieldset>
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
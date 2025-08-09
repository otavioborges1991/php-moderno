<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Aleátorio</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>
<?php
$numero = random_int(0, 100);
?>

<body>
    <header>
        <h1>Antecessor e Sucessor</h1>
        <p>Usa php simples para os números antecessores e sucessores de um outro número</p>
    </header>
    <main class="flex-center-items flex-center-content border">
        <h1>Números aleátorios</h1>
        <p>Gerando um número aleátorio entre 0 e 100</p>
        <p>O número gerado foi: <strong><?php echo $numero; ?></strong></p>
        <button class="action-button" onclick="window.location.reload()">Gerar outro</button>
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
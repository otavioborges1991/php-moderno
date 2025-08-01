<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="/curso-php/styles/estilo.css">
</head>

<body>
    <header>
        <h1>Cadastro</h1>
    </header>
    <main>
        <div class="terminal">
            <header>
                <h4>Terminal. かっこいい</h1>
            </header>

            <div class="output">
                <p><span class="prompt">otavio@windows:~$</span><?php echo $_SERVER['SCRIPT_NAME']; ?></p>
                <?php
                require_once 'funcions.php';
                $nome = $_POST['nome'] ?? '';
                $email = $_POST['email'] ?? '';
                $senha = $_POST['senha'] ?? '';
                echo "<p>Dados recebidos com sucesso!</p>";
                echo $nome ? "<p>Nome: $nome</p>" : "<p>Nome não informado.</p>";
                echo $email ? "<p>Email: $email</p>" : "<p>Email não informado.</p>";
                echo $senha ? "<p>Senha: " . exibirSenha($senha) . "</p>" : "<p>Senha não informada.</p>";
                var_dump($_REQUEST);
                ?>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regras de Identificadores</title>
    <link rel="stylesheet" href="../../styles/estilo.css">
</head>

<body>
    <header>
        <h1>Regras para nomear identificadores</h1>
    </header>
    <main>

        <div class="terminal">
            <header>
                <h4>Terminal. かっこいい</h1>
            </header>
            <p><span class="prompt">otavio@windows:~$</span><?php echo $_SERVER['SCRIPT_NAME']; ?></p>
            <p>
                Regras para nomear identificadores:
            </p>
            <ol>
                <li>
                    Variáveis sempre começam com o símbolo de cifrão ($).
                </li>
                <li>
                    O segundo caractere pode ser uma letra ou um sublinhado (_).
                </li>
                <li>
                    Aceita-se letras, números e sublinhados (_).
                </li>
                <li>
                    Não pode começar com um número.
                </li>
                <li>
                    ASCII apartirde 128
                </li>
                <li>
                    Pode conter acentos, mas não é recomendado.
                </li>
                <li>
                    Não pode conter espaços.
                </li>
                <li>
                    Não pode conter caracteres especiais como @, #, %, etc.
                </li>
                <li>
                    Não pode ser uma palavra reservada do PHP (como if, else, while, etc.).
                </li>
                <li>
                    Identificadores são sensíveis a maiúsculas e minúsculas, ou seja, $variavel e $Variavel são diferentes.
                </li>
                <li>
                    É recomendado usar nomes descritivos e significativos para facilitar a leitura do código.
                </li>
                <li>
                    Evite usar nomes muito curtos ou genéricos, como $a ou $x, pois isso pode dificultar a compreensão do código.
                </li>
                <li>
                    Nomes muito longos também devem ser evitados, pois podem tornar o código difícil de ler e manter.
                </li>
                <li>
                    Use convenções de nomenclatura consistentes, como camelCase ou snake_case, para melhorar a legibilidade do código.
                </li>
                <li>
                    Evite usar nomes que possam causar confusão, como $var1 e $var2, pois isso pode dificultar a compreensão do código.
                </li>
                <li>
                    É recomendado usar nomes que indiquem o tipo de dado armazenado, como $nomeUsuario para uma variável que armazena o nome de um usuário.
                </li>
                <li>
                    Evite usar nomes que possam ser confundidos com palavras-chave do PHP, como $function ou $class.
                </li>
                <li>
                    Para variáveis globais, é recomendado usar um prefixo, como $GLOBALS['nomeVariavel'], para evitar conflitos com variáveis locais.
                </li>
                <li>
                    Para variáveis de classe, é recomendado usar um prefixo como $this->nomeVariavel para indicar que a variável pertence à instância da classe.
                </li>
                <li>
                    Para constantes, é recomendado usar letras maiúsculas e sublinhados, como DEFINE('NOME_CONSTANTE', 'valor'), para diferenciá-las de variáveis.
                </li>
                <li>
                    Para funções, é recomendado usar letras minúsculas e sublinhados, como function nome_funcao() para diferenciá-las de variáveis e constantes
                </li>
                <li>
                    Para classes, é recomendado usar PascalCase, como class NomeDaClasse, para diferenciá-las de variáveis, constantes e funções.
                </li>
            </ol>
        </div>
        <br>
        <button class="back-button"  onclick="window.history.back()">Voltar</button>
    </main>
    <footer>
        <p>Desenvolvido por Otávio Vinicios Borges</p>
    </footer>
</body>

</html>
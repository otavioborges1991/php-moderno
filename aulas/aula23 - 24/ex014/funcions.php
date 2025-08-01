<?php

function senhaValida($senha)
// Verifica se a senha é válida de acordo com os critérios especificados
// A senha deve ter pelo menos 8 caracteres, conter pelo menos uma letra maiúscula, uma letra minúscula e um número
{
    return strlen($senha) >= 8 && preg_match('/[A-Z]/', $senha) && preg_match('/[a-z]/', $senha) && preg_match('/[0-9]/', $senha);
}

function exibirSenha($senha)
// Exibe a senha de forma segura, substituindo caracteres por asteriscos
{
    return str_repeat('*', strlen($senha));
}

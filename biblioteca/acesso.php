<?php

define('ACESSO', true);

function acessoLogar($usuario) {
    if(!empty($usuario)) { //se o usuario não for vazio, logo existe o usuário na base com as credenciais
        $_SESSION["logado"] = array( //cria a sessao acesso com os dados do usuario
            "nome" => $usuario['nome'],
            "papel" => $usuario['papel']
        );
        return true; 
    }
    return false;
}

function acessoDeslogar() {
    if (isset($_SESSION["logado"])) {
        $_SESSION["logado"] = null;
        unset($_SESSION["logado"]);
    }
}

function acessoUsuarioEstaLogado() {
    return isset($_SESSION["logado"]);
}

function acessoPegarPapelDoUsuario() {
    if (acessoUsuarioEstaLogado()) {
        return $_SESSION["logado"]["papel"];
    }
}

function acessoPegarUsuarioLogado() {
    if (acessoUsuarioEstaLogado()) {
        return $_SESSION["logado"]["email"];
    }   
}

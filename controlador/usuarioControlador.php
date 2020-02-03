<?php

require_once "modelo/usuarioModelo.php";
require './servico/validacaoServico.php';
require './biblioteca/alert.php';

function index() {
    $dados["usuarios"] = pegarTodosUsuarios();
    exibir("usuario/listar", $dados);
}

function adicionar() {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $ouvinte = isset($_POST["ouvinte"]) ? $_POST["ouvinte"] : null;
        $erros = validacao($nome, $email, $senha, $ouvinte);
        if (empty($erros)) {
            alert(adicionarUsuario($nome,$email,$senha, $ouvinte,'user'));
            exibir("usuario/formulario");
        } else {
            $dados["erros"] = $erros;
            exibir("usuario/formulario", $dados);
        }
    } else {
        $dados["usuarios"] = pegarTodosUsuarios();
        exibir("usuario/formulario",$dados);
    }
}

function deletar($id) {
    alert(deletarUsuario($id));
    redirecionar("home");
}

function editar($id) {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        alert(editarUsuario($id, $nome, $email));
        redirecionar("usuario/index");
    } else {
        $dados["usuario"] = pegarUsuarioPorId($id);
        exibir("usuario/formulario", $dados);
    }
}

function visualizar($id) {
    $dados["usuario"] = pegarUsuarioPorId($id);
    exibir("usuario/visualizar", $dados);
}

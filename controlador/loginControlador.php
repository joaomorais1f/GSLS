<?php

require_once "modelo/usuarioModelo.php";
require_once "./biblioteca/acesso.php";
require_once './biblioteca/alert.php';

/** anon */
function index() {
    if (ehPost()) {
        extract($_POST);
        $usuario = pegarUsuarioPorEmailSenha($emaillogin, $passwordlogin);
        
        if (acessoLogar($usuario)) {
            redirecionar("home");
        } else {
            alert("usuario ou senha invalidos!");
        }
    }
    exibir("login/index");
}

/** anon */
function logout() {
    acessoDeslogar();
    alert("deslogado com sucesso!");
    redirecionar("home");
}

?>
<?php
require 'modelo/usuarioModelo.php';
require 'modelo/comentarioModelo.php';

function index () {
   exibir("usuario/conta");
}

function dados () {
   if(ehPost()) {
      extract($_POST);
      editarUsuario($idusuario,$nome,$email,$senha);
      $_SESSION['logado'] = pegarUsuarioPorEmailSenha($email,$senha);
      exibir("usuario/conta");
   }
}

function delete ($id) {
   deletarUsuario($id);
   ExcluirComentarioPorIdPessoa(7);
   unset($_SESSION['logado']);
   redirecionar("home");
}
?>
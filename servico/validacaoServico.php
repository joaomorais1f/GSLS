<?php
function emailexistente ($email) {
	$comando = "SELECT email FROM usuario WHERE email = '$email'";
	$retorno = mysqli_query(conn(), $comando);
	$emailexiste = mysqli_fetch_assoc($retorno);
	return $emailexiste;
}

function validacao($nome, $email, $senha, $ouvinte){
	$errors 		= array();	
	$email			= strip_tags($email);
	$nome 			= strip_tags($nome);
	$senha 			= strip_tags($senha);
	if (strlen(trim($nome)) <= 3) {
		$erro = array();
		$erro["campo"] = "nome";
		$erro["mensagem"] = "Insira um nome";
		$errors[] = $erro;
	}elseif(!preg_match("/^[a-zA-ZãÃáÁàÀêÊéÉèÈíÍìÌôÔõÕóÓòÒúÚùÙûÛçÇºª' ']+$/", $nome)) {
		$erro = array();
		$erro["campo"] = "nome";
		$erro["mensagem"] = "Insira um nome valido!!!";
		$errors[] = $erro;
	}
	$emailValido 	= filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$emailexiste = emailexistente($emailValido);
	if (!$emailValido) {
		$erro = array();
		$erro["campo"] = "email";
		$erro["mensagem"] = "E-mail não valido.";
		$errors[] = $erro;
	} else {
		if ($emailexiste) {
			$erro = array();
			$erro["campo"] = "email";
			$erro["mensagem"] = "E-mail já cadastrado.";
			$errors[] = $erro;
		}
	}
	if(strlen(trim($senha)) == 0){
		$erro = array();
		$erro["campo"] = "senha";
		$erro["mensagem"] = "Insira uma senha";
		$errors[] = $erro; 
	} else if(strlen($senha) > 16){
		$erro = array();
		$erro["campo"] = "senha";
		$erro["mensagem"] = "Insira uma senha menor.";
		$errors[] = $erro; 
	} else if(strlen($senha) < 8){
		$erro = array();
		$erro["campo"] = "senha";
		$erro["mensagem"] = "Insira uma senha maior.";
		$errors[] = $erro; 
	} 

	if (strlen(trim($ouvinte)) == 0) {
		$erro = array();
		$erro["campo"] = "ouvinte";
		$erro["mensagem"] = "Selecione uma opção.";
		$errors[] = $erro;
	}
	return $errors;
}

function ValidacaoInserirSinais ($titulobr, $tituloen, $describr, $descrien, $imagembr,$imagemen) {
	$errors = array();
	$titulobr = strip_tags($titulobr);
	$tituloen = strip_tags($tituloen);
	$describr = strip_tags($describr);
	$descrien = strip_tags($descrien);

	if (strlen($titulobr) > 0) {
		$erro = array();
		$erro["campo"] = "titulobr";
		$erro["mensagem"] = "Informe um título";
	}
	if (strlen($titulobr) > 0) {
		$erro = array();
		$erro["campo"] = "tituloen";
		$erro["mensagem"] = "Informe um título";
	}
	

}

?>
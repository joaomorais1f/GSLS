<?php

require "modelo/palavraModelo.php";
require "./servico/uploadServico.php";
require './servico/validacaoServico.php';
require_once 'modelo/comentarioModelo.php';
require_once './biblioteca/uteis.php';

function index($idPai = 0) {
	$palavras = pegarTodasAsPalavrasPorIdPai($idPai);
	$dados['palavras'] = $palavras;
	$tipo = null;
	$palavra = pegarPalavraPorId($idPai);
	if($palavra) {	
		$tipo = $palavra["idtipo"] + 1;
	} else {
		$tipo = 1;
	}
	$dados['tipo'] = $tipo;
	$dados['idpai'] = $idPai;
	exibir("palavra/listar", $dados);
}

function salvar() {
	$titulobr = $_POST["titulobr"];
	$tituloen = $_POST["tituloen"];
	$describr = $_POST["describr"];
	$descrien = $_POST["descrien"];
	$idtipo = $_POST["idtipo"];
	$idpai = $_POST["idpai"];
	$imagembr = uploadImagem($_FILES['imagembr']);
	$imagemen = uploadImagem($_FILES['imagemen']);
	if($idpai == 0) {
		$idpai == null;
	}
	$erros = ValidacaoInserirSinais($titulobr,$tituloen,$describr,$descrien,$imagembr,$imagemen);
	if (!empty($erros) ) {
		adicionarPalavra($titulobr, $tituloen, $describr, $descrien, $imagembr,$imagemen,$idpai, $idtipo);
		redirecionar("palavra/index");
	} else {
		$dados["erros"] = $erros;
		exibir("palavra/listar",$dados);
	}
}

function frase ($idPalavra) {
	//echo $idpai;
	
	
	$palavra = pegarPalavraPorId($idPalavra);
	$dados["palavra"] = $palavra;

	$idpai = $palavra["idpai"];
	$palavrasDoMesmoTema = pegarTodasAsPalavrasPorIdPai($idpai);


	$dados["palavrasDoMesmoTema"] = $palavrasDoMesmoTema;

	$comentario_palavra = pegarComentarioPorIdPalavra($idPalavra);
	$dados["comentarios"] = $comentario_palavra;
	$palavraPai = pegarPalavraPorId($idpai);
	$dados['palavraPai'] = $palavraPai;
	
	exibir("palavra/frases",$dados);
}

function delete ($idpalavra) {
	deletarPalavra($idpalavra);
	redirecionar('palavra/index');
}

function comentario () {
	$idusuario = $_SESSION['logado']['idusuario'];
	$idpalavra = $_POST["idpalavra"];
	$comentario = $_POST["comentario"];
	$comentarios = comentar($idusuario,$idpalavra,$comentario);
	$comentario_palavra = pegarComentarioPorIdPalavra($idpalavra);
	$palavra = pegarPalavraPorId($idpalavra);
	$dados["palavra"] = $palavra;

	$idpai = $palavra["idpai"];
	$palavrasDoMesmoTema = pegarTodasAsPalavrasPorIdPai($idpai);


	$dados["palavrasDoMesmoTema"] = $palavrasDoMesmoTema;

	$palavraPai = pegarPalavraPorId($idpai);
	$dados['palavraPai'] = $palavraPai;
	$dados["comentarios"] = $comentario_palavra;
	exibir("palavra/frases",$dados);
}

function ExcluirComentario ($idcomentario) {
	$todos_comentarios_por_id = PegarComentarioPorId($idcomentario);

	$palavra = pegarPalavraPorId($todos_comentarios_por_id['idpalavra']);
	$idpai = $palavra["idpai"];
	$palavrasDoMesmoTema = pegarTodasAsPalavrasPorIdPai($idpai);
	$dados["palavra"] = $palavra;
	$dados["palavrasDoMesmoTema"] = $palavrasDoMesmoTema;

	$palavraPai = pegarPalavraPorId($idpai);
	$dados['palavraPai'] = $palavraPai;
	$comentarios = ExcluirComentarioPorId($idcomentario);
	$comentario_palavra = pegarComentarioPorIdPalavra($todos_comentarios_por_id['idpalavra']);
	$dados["comentarios"] = $comentario_palavra;
	exibir("palavra/frases",$dados);	
}

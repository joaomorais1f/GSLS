<?php

require "modelo/palavraModelo.php";
require "./servico/uploadServico.php";
require './servico/validacaoServico.php';
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

function adicionarTema() {
	$dados["tipo"] = 1;
	$dados["idpai"] = 0;	
	exibir("palavra/form", $dados);
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

function frase ($idpai) {
	//echo $idpai;
	$frase = pegarTodasAsPalavrasPorIdPai($idpai);
	$nome_subtema = pegarPalavraPorId($idpai);
	$dados['nome_subtema'] = $nome_subtema;
	$dados["frases"] = $frase;
	exibir("palavra/frases",$dados);
}

function delete ($idpalavra) {
	deletarPalavra($idpalavra);
	redirecionar('palavra/index');
}
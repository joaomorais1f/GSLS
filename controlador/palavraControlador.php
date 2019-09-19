<?php

require "modelo/palavraModelo.php";

function index($idPai = 0) {
	$palavras = pegarTodasAsPalavrasPorIdPai($idPai);
	$dados['palavras'] = $palavras;

	$tipo = null;

	$palavra = pegarPalavraPorId($idPai);
	if($palavra) {
		var_dump($palavra);	
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


function adicionarSubTema($idTema) {
	$dados["tipo"] = 2;
	$dados["idpai"] = $idTema;
	exibir("palavra/form", $dados);
}

function adicionarFrase($idSubtema) {
	$dados["tipo"] = 3;
	$dados["idpai"] = $idSubtema;
	exibir("palavra/form", $dados);	
}

function salvar() {
	$titulobr = $_POST["titulobr"];
	$tituloen = $_POST["tituloen"];
	$describr = $_POST["describr"];
	$descrien = $_POST["descrien"];

	$idtipo = $_POST["idtipo"];
	$idpai = $_POST["idpai"];

	if($idpai == 0) {
		$idpai == null;
	}
	
	adicionarPalavra($titulobr, $tituloen, $describr, $descrien, '','',$idpai, $idtipo);
	
	redirecionar("palavra/index");



}
<?php

function adicionarPalavra($titulobr, $tituloen, $describr, $descrien, $imagembr,$imagemen, $idpai, $idtipo) {
    $sql = "INSERT INTO palavra (titulobr, tituloen, describr, descrien, imagembr,imagemen, idpai, idtipo) 
    	values ('$titulobr', '$tituloen', '$describr', '$descrien', '$imagembr','$imagemen', '$idpai', '$idtipo');";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar palavra' . mysqli_error($cnx)); }
    return 'palavra cadastrada com sucesso!';
}


function pegarPalavraPorId($idpalavra) {
    $sql = "SELECT * FROM palavra WHERE idpalavra='$idpalavra'";
    $resultado = mysqli_query(conn(), $sql);
    $palavra = mysqli_fetch_assoc($resultado);
    return $palavra; 
}


function pegarIdPorPalavra($palavra) {
    $sql = "SELECT idpalavra FROM palavra WHERE titulobr='$palavra'";
    $resultado = mysqli_query(conn(), $sql);
    $idpalavra = mysqli_fetch_assoc($resultado);
    return $idpalavra['idpalavra'];
}

function pegarTodasAsPalavras() {
    $sql = "SELECT palavra.idpalavra,
        palavra.titulobr, 
        palavra.tituloen, 
        palavra.idpai, 
        palavra.describr, 
        palavra.descrien,
        tipo.descricao as tipo 
        FROM palavra 
        INNER JOIN tipo ON palavra.idtipo=tipo.idtipo
        ORDER BY tipo.descricao";

    $resultado = mysqli_query(conn(), $sql);
    $palavras = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $palavras[] = $linha;
    }
    return $palavras;
}


function pegarTodosSubtemas() {
    $sql = "SELECT * FROM palavra WHERE idtipo=2";
    $resultado = mysqli_query(conn(), $sql);
    $subtemas = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $subtemas[] = $linha;
    }
    return $subtemas;
}

function pegarTodasAsPalavrasPorSubtema($idSubtema) {
    $sql = "SELECT * FROM palavra WHERE idpai=$idSubtema";
    $resultado = mysqli_query(conn(), $sql);
    $frases = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $frases[] = $linha;
    }
    return $frases;
}

function pegarTodasAsPalavrasPorIdPai($idPai) {
    $sql = "SELECT * FROM palavra WHERE idpai=$idPai";
    $resultado = mysqli_query(conn(), $sql);
    $palavras = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $palavras[] = $linha;
    }
    return $palavras;
}

function pegarTodasAsPalavrasPorIdTipo($idTipo) {
    $sql = "SELECT * FROM palavra WHERE idtipo=$idTipo";
    $resultado = mysqli_query(conn(), $sql);
    $palavras = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $palavras[] = $linha;
    }
    return $palavras;
}

function deletarPalavra($idpalavra) {
    $sql = "DELETE FROM palavra WHERE idpalavra = '$idpalavra'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die('Erro ao deletar o sinal'. mysqli_error($cnx));
    }
    return 'Sinal deletado com sucesso';
}

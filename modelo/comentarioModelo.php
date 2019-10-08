<?php


function comentar ($idusuario, $idpalavra, $comentario) {
	$sql = "INSERT INTO comentario (idusuario,idpalavra,comentario) VALUES ('$idusuario', '$idpalavra', '$comentario')";
	 $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao comentar' . mysqli_error($cnx)); }
    return 'comentario adicionado com sucesso!';
}

function pegarComentarioPorIdPalavra($idpalavra) {
	$sql = "SELECT * FROM comentario WHERE idpalavra = '$idpalavra'";
	$resultado = mysqli_query($cnx = conn(), $sql);
    $comentarios = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $comentarios[] = $linha;
    }
    return $comentarios;
}

function ExcluirComentarioPorId ($idcomentario) {
	$sql = "DELETE FROM comentario WHERE idcomentario = '$idcomentario'";
	$resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao exlcuir comentario' . mysqli_error($cnx)); }
    return 'comentario excluido com sucesso!';	
}

function PegarComentarioPorId ($idcomentario) {
	$sql = "SELECT * FROM comentario WHERE idcomentario = '$idcomentario'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    $comentario = mysqli_fetch_assoc($resultado);
    return $comentario;
}
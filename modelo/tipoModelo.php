<?php

function pegarTodosOsTipos() {
    $sql = "SELECT * FROM palavra";
    $resultado = mysqli_query(conn(), $sql);
    $palavras = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $palavras[] = $linha;
    }
    return $palavras;
}

function pegarIdTipoPorDescricao($tipo) {
   $sql = "SELECT id FROM tipo WHERE descricao='$tipo'";
    $resultado = mysqli_query(conn(), $sql);
    $idTipo = mysqli_fetch_assoc($resultado);
    return $idTipo;
}
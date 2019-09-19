<?php

function conn() {
    $cnx = mysqli_connect("localhost", "root", "", "gsls");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}
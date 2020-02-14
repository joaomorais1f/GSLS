<?php
if (isset($_SESSION['logado'])) {
    //session_destroy();
    $nome_completo = $_SESSION['logado']['nome'];
    $nome = explode(" ", $nome_completo);
} else {
    echo "";
} ?>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark  fixed-top navbarcolor">
    <div class=" container">
    <a class="navbar-brand" id="titulo_cabecalho" href="">Guia de Sobrevivência em Língua de Sinais</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link cabecalho" href="#gsls">O que é o GSLS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link cabecalho" href="#quem">Quem Somos?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link cabecalho" href="palavra">Sinais</a>
            </li>
            <?php if (!isset($_SESSION['logado'])) { ?>
                <li class="nav-item">
                    <a class="nav-link cabecalho" href="usuario/adicionar">Entre ou Cadastre-se</a>
                </li>
            <?php } else { ?>
                <li class="nav-item pl-2">
                    <div class="dropdown">
                        <button class="btn button-style dropdown-toggle cabecalho" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Olá, <?= ucfirst($nome[0]); ?>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item cabecalho" href="conta">Conta</a>
                            <a class="dropdown-item cabecalho" href="login/logout">Sair</a>
                            <!--<a class="dropdown-item" href="#">Something else here</a> -->
                        </div>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
    </div>
</nav>
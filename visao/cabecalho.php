<!--Para incluir o cabeçalho no seu site você precisa realizar a requisição deste arquivo `template.php`-->
<?php

if (isset($_SESSION['logado'])) {
    //session_destroy();
    $nome_completo = $_SESSION['logado']['nome'];
    $nome = explode(" ", $nome_completo);
} else {
    echo "";
} ?>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark  fixed-top" style="background-color: #09395eff;">
    <div class="container">
        <a class="navbar-brand" href="">Guia de Sobrevivência de Língua de Sinais</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#gsls">O que é o GSLS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#quem">Quem Somos?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="palavra">Temas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Exibição Teste</a>
                </li>
                <?php if (!isset($_SESSION['logado'])) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="usuario/adicionar">Entre ou Cadastre-se</a>
                </li>
                <?php } else { ?>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Olá, <?= $nome[0]; ?>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Conta</a>
                            <a class="dropdown-item" href="login/logout">Sair</a>
                            <!--<a class="dropdown-item" href="#">Something else here</a> -->
                        </div>
                    </div>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
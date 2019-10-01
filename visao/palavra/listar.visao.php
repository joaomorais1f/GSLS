
<div class="container">
	<h2 class="text-center"> Sinais</h2>
	<div class="row">

		<?php if (isset($palavras)) : ?>
			<?php foreach ($palavras as $palavra) : ?>
				<div class="col-lg-4 col-sm-6 portfolio-item">
					<div class="card h-100">
						<img class="card-img-top temas"  id="sinal" src="<?= $palavra['imagembr'] ?>" alt="sinal_<?= $palavra['titulobr'] ?>">
						<a href="palavra/delete/<?= $palavra['idpalavra'] ?>"> <img src="./publico/images/x-button.svg" class="pause-icon delete"></a>
						<!-- <span><img class="pause-icon" src="./publico/images/pause-button.svg"></span> -->
						<div class="card-body">
							<h4 class="card-title">
								<?php if ($palavra['idtipo'] == 3) : ?>
									<a href="./palavra/frase/<?= $palavra['idpalavra'] ?>"><?= $palavra['titulobr'] ?> </a>
								<?php else : ?>
									<a href="./palavra/index/<?= $palavra['idpalavra'] ?>"><?= $palavra['titulobr'] ?></a>
								<?php endif; ?>
							</h4>
							<p class="card-text"><?= $palavra['describr'] ?></p>

						</div>
					</div>
				</div>

			<?php endforeach; ?>
		<?php endif; ?>
	</div>
	<?php if (isset($_SESSION['logado']) and ($_SESSION['logado']['tipo'] == 'admin')) : ?>
		<div class="col-lg-4 col-sm-6 portfolio-item">
			<div class="card h-70">
				<!--<img class="card-img-top" src="images/temas/img6.jpg" alt=""> -->
				<div class="card-body">
					<form method="POST" action="./palavra/salvar" enctype="multipart/form-data">
						<label for="imagem_tema"> Clique para inserir o Gif em LIBRAS </label>
						<input type="file" name="imagembr" id="imagem_tema">
						<p class="erro text-center">
							<?= @verificarErro($erros, 'imagembr') ?>
						</p>
						<div class="form-group">
							<input placeholder="Título em Português (Title in Portuguese):" class="form-control" id="nome_tema" type="text" name="titulobr">
						</div>
						<p class="erro text-center">
							<?= @verificarErro($erros, 'titulobr') ?>
						</p>
						<div class="form-group">
							<textarea class="form-control" placeholder="Descrição em Português (Description in Portuguese) " name="describr"></textarea>
						</div>
						<p class="erro text-center">
							<?= @verificarErro($erros, 'describr') ?>
						</p>
						<label for="imagem_tema_asl"> Clique para inserir o Gif em ASL </label>
						<input type="file" name="imagemen" id="imagem_tema_asl">
						<p class="erro text-center">
							<?= @verificarErro($erros, 'imagemen') ?>
						</p>
						<div class="form-group">
							<input placeholder="Título em Inglês (Title in English)" class="form-control" id="nome_tema_asl" type="text" name="tituloen">
						</div>
						<p class="erro text-center">
							<?= @verificarErro($erros, 'tituloen') ?>
						</p>
						<div class="form-group">
							<input placeholder="idtipo" class="form-control" id="idtipo" type="hidden" name="idtipo" value="<?= $tipo ?>">
						</div>
						<div class="form-group">
							<input placeholder="idpai:" class="form-control" id="idpai" type="hidden" name="idpai" value="<?= $idpai ?>">
						</div>
						<div class="form-group">
							<textarea class="form-control" placeholder="Descrição em Inglês (Description in English) " name="descrien"></textarea>
						</div>
						<p class="erro text-center">
							<?= @verificarErro($erros, 'descrien') ?>
						</p>
						<div class="form-group">
							<button type="submit" class="btnSubmit Adicionar_Tema"> ADICIONAR </button>
						</div>
					</form>
				</div>
			</div>
		</div>
	<?php elseif (isset($_SESSION['logado'])) : ?>
	<?php else : ?>
		<div class="alert alert-success mx-auto aviso" role="alert">
			<h4 class="alert-heading text-center">Bem vindo</h4>
			<p class="text-center">Para realizar comentários sobre os sinais da plataforma, é preciso se cadastrar, <a href="usuario/adicionar">clique aqui</a> e realize seu cadastro</p>
			<hr>
		</div>

	<?php endif; ?>
</div>
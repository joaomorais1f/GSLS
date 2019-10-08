    <script>
    window.onload = function() {
                Gifffer({
                  playButtonStyles: {
                    'width': '60px',
                    'height': '60px',
                    'border-radius': '30px',
                    'background': 'rgba(0, 0, 0, 0.3)',
                    'position': 'absolute',
                    'top': '50%',
                    'left': '50%',
                    'margin': '-30px 0 0 -30px'
                  },
                  playButtonIconStyles: {
                    'width': '0',
                    'height': '0',
                    'border-top': '14px solid transparent',
                    'border-bottom': '14px solid transparent',
                    'border-left': '14px solid rgba(0, 0, 0, 0.5)',
                    'position': 'absolute',
                    'left': '26px',
                    
                  }
                });
            }
</script>

<div class="container">
	<h2 class="text-center"> Sinais</h2>
	<?php if (isset($_SESSION['logado']) and ($_SESSION['logado']['tipo'] != 'admin')) : ?>
	<div class="alert alert-success mx-auto aviso" role="alert">
		<h4 class="alert-heading text-center">Bem vindo</h4>
		<p class="text-center">Para realizar comentários sobre os sinais da plataforma, é preciso se cadastrar, <a href="usuario/adicionar">clique aqui</a> e realize seu cadastro</p>
		<hr>
	</div>
<?php endif; ?>
	<div class="row">

		<?php if (isset($palavras)) : ?>
			<?php foreach ($palavras as $palavra) : ?>
				<div class="col-lg-4 col-sm-12 col-md-6 portfolio-item">
					<div class="card h-100">
						<img class="card-img-top temas"  data-gifffer-width="100%" data-gifffer="<?=$palavra['imagembr']?>" alt="sinal_<?= $palavra['titulobr'] ?>">
						<?php if(isset($_SESSION['logado']) and ($_SESSION['logado']['tipo']) == 'admin') : ?>
						<a> <img src="./publico/images/x-button.svg" height="45px" style="position: absolute; top:5px; right:5px;" class="teste-icon delete" data-toggle="modal" data-target="#exampleModal<?=$palavra['idpalavra']?>"></a>
					<?php endif; ?>
					<div class="modal fade" id="exampleModal<?=$palavra['idpalavra']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Excluir Permanentemente o Sinal</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									Você tem certeza que deseja excluir o sinal <strong><?=$palavra['titulobr']?></strong>?
								</div>
								<div class="modal-footer">

									<a href="palavra/delete/<?= $palavra['idpalavra']?>" class="btn btn-danger">Excluir</a>
									
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
								</div>
							</div>
						</div>
					</div>
					<!-- <span><img class="pause-icon" src="./publico/images/pause-button.svg"></span> -->
					<div class="card-body">
						<h4 class="card-title">
							<?php if ($palavra['idtipo'] == 3) : ?>
								<a href="./palavra/frase/<?=$palavra['idpalavra']?>"><?=$palavra['titulobr']?> </a>
								<?php else : ?>
									<a href="./palavra/index/<?= $palavra['idpalavra'] ?>"><?= $palavra['titulobr']?></a>
								<?php endif; ?>
							</h4>
							<p class="card-text"><?=$palavra['describr']?></p>

						</div>
					</div>
				</div>

			<?php endforeach; ?>
		<?php endif; ?>
	</div>
	<?php if (isset($_SESSION['logado']) and ($_SESSION['logado']['tipo'] == 'admin')) : ?>
	<div class="col-lg-4 col-sm-12 portfolio-item">
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

<?php endif; ?>
</div>

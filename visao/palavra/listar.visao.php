<div class="container">
	<h2 class="text-center"> Sinais</h2>
	<div class="row">
		<?php foreach ($palavras as $palavra): ?>
				<div class="col-lg-4 col-sm-6 portfolio-item">
					<div class="card h-100">
						<a href="./palavra/index/<?=$palavra['idpalavra']?>">
							<img class="card-img-top temas" src="<?=$palavra['imagembr']?>" alt="" >
						</a>
						<div class="card-body">
							<h4 class="card-title">
								<?php if ($palavra['idtipo'] == 3): ?>
									<a href="./palavra/exibir/<?=$palavra['idpalavra']?>"><?=$palavra['titulobr']?> </a>
								<?php else: ?> 
								<a href="./palavra/index/<?=$palavra['idpalavra']?>"><?=$palavra['titulobr']?></a>
								<?php endif; ?>
							</h4>
							<p class="card-text"><?=$palavra['describr']?></p>
							
						</div>
					</div>
				</div>

			<?php endforeach; ?>
		</div>
		<div class="col-lg-4 col-sm-6 portfolio-item">
			<div class="card h-70">
				<!--<img class="card-img-top" src="images/temas/img6.jpg" alt=""> -->
				<div class="card-body">
					<form action="./palavra/salvar" method="POST" enctype="multipart/form-data">
						<label for="imagem_tema"> Clique para inserir o Gif em LIBRAS </label>
						<input type="file" name="imglibras" id="imagem_tema">
						<div class="form-group">
							<input placeholder="Título em Português (Title in Portuguese):" class="form-control" id="nome_tema" type="text" name="titulobr">
						</div>
						<div class="form-group">
							<textarea class="form-control" placeholder="Descrição em Português (Description in Portuguese) " name="describr"></textarea>
						</div>
						<label for="imagem_tema_asl"> Clique para inserir o Gif em ASL </label>
						<input type="file" name="imgASL" id="imagem_tema_asl">
						<div class="form-group">
							<input placeholder="Título em Inglês (Title in English)" class="form-control" id="nome_tema_asl" type="text" name="tituloen">
						</div>
						<div class="form-group">
							<input placeholder="idtipo" class="form-control" id="idtipo" type="hidden" name="idtipo" value="<?=$tipo?>">
						</div>
						<div class="form-group">
							<input placeholder="idpai:" class="form-control" id="idpai" type="hidden" name="idpai" value="<?=$idpai?>">
						</div>
						<div class="form-group">
							<textarea class="form-control" placeholder="Descrição em Inglês (Description in English) " name="descrien"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btnSubmit Adicionar_Tema"> ADICIONAR </button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
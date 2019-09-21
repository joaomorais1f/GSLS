<form method="post" action="./palavra/salvar">

	titulobr:<input type="text" name="titulobr">
	tituloen:<input type="text" name="tituloen">
	descbr:<input type="text" name="describr">
	descen:<input type="text" name="descrien">

	<input type="number" name="idtipo" value="<?= $tipo ?>">
	<input type="number" name="idpai" value="<?= $idpai ?>">

	<button type="submit">vai</button>


</form>
<div class="container">
	<h2 style="text-align: center;">Temas</h2>
	<?php
	if (empty($temas)) {
		?>
		<h1> NAO TEM TEMA </h1>

	<?php } else { ?>
		<h1 class="text-center"> Tema </h1>
		<div class="row">
			<?php for ($i = 0; $i < count($temas); $i++) {
					?>
				<div class="col-lg-4 col-sm-6 portfolio-item">
					<div class="card h-100">
						<a href="subtema.php?idtema=<?= //$temas[$i]['idtema'] ?>"><img class="card-img-top temas" src="upload/imagens/<?=// $temas[$i]['imagemlibras'] ?>" alt=""></a>
						<div class="card-body">
							<h4 class="card-title">
								<a href="subtema.php?idtema=<?= //$temas[$i]['idtema'] ?>"><?=// $temas[$i]['temalibras'] ?></a>
							</h4>
							<p class="card-text"><?=// $temas[$i]['descricao_libras'] ?></p>
						</div>
					</div>
				</div>
		<?php }
		} ?>
		<div class="col-lg-4 col-sm-6 portfolio-item">
			<div class="card h-100">
				<!--<img class="card-img-top" src="images/temas/img6.jpg" alt=""> -->
				<div class="card-body">
					<form action="funcoes/adicionar.tema.php" method="POST" enctype="multipart/form-data">
						<label for="imagem_tema"> Adicionar Tema Libras: </label>
						<input type="file" name="imglibras" id="imagem_tema">
						<div class="form-group">
							<input placeholder="Nome do Tema:" class="form-control" id="nome_tema" type="text" name="temalibras">
						</div>
						<div class="form-group">
							<textarea class="form-control" placeholder="Descrição do Tema: " name="desclibras"></textarea>
						</div>
						<label for="imagem_tema_asl"> Adicionar Tema Asl: </label>
						<input type="file" name="imgASL" id="imagem_tema_asl">
						<div class="form-group">
							<input placeholder="Nome do Tema:" class="form-control" id="nome_tema_asl" type="text" name="temaasl">
						</div>
						<div class="form-group">
							<textarea class="form-control" placeholder="Descrição do Tema: " name="descasl"></textarea>
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

<hr>
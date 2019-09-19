
<?php foreach ($palavras as $palavra): ?>



	tipo:<?=$palavra['idtipo']?>

	<br><br>

	idpalavra:<?=$palavra['idpalavra']?>
	titulobr:<?=$palavra['titulobr']?>

	<?php if($palavra['idtipo'] == 3): ?>
		<a href="./palavra/exibir/<?=$palavra['idpalavra']?>"><?=$palavra['titulobr']?></a>
	<?php else: ?>
		<a href="./palavra/index/<?=$palavra['idpalavra']?>"><?=$palavra['titulobr']?></a>
	<?php endif; ?>

<?php endforeach; ?>
<form method="post" action="./palavra/salvar">

	titulobr:<input type="text" name="titulobr">
	tituloen:<input type="text" name="tituloen">
	descbr:<input type="text" name="describr">
	descen:<input type="text" name="descrien">

	<input type="number" name="idtipo" value="<?=$tipo?>">
	<input type="number" name="idpai" value="<?=$idpai?>">

	<button type="submit">vai</button>


</form>
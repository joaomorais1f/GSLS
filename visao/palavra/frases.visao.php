 <div class="container">
  


<div class="row m-2">
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

      <img class="img-fluid" width="750" height="500" src="<?=$palavra['imagembr']?>" alt="">

    <h3 class="my-4 text-center">Frases do subtema: <?=ucfirst($palavraPai['titulobr'])?></h3>
      <?php foreach ($palavrasDoMesmoTema as $frase) : ?>
        <div class="col-md-3 col-sm-6 mb-4">
          <a href="./palavra/frase/<?= $frase['idpalavra'] ?>">
            <img class="img-fluid" width="500" height="300" src="<?=$frase['imagembr']?>" alt="">
            <figcaption class="text-center"><?=$frase['titulobr']?></figcaption>
          </a>
        </div>
      <?php endforeach; ?>
      </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

        <img class="img-fluid exibir" width="750" height="500" src="<?=$palavra['imagemen']?>" alt="">
    <h3 class="my-4 text-center">Frases do subtema: <?=ucfirst($palavraPai['tituloen'])?></h3>
      <?php foreach ($palavrasDoMesmoTema as $frase) : ?>
        <div class="col-md-3 col-sm-6 mb-4">
          <a href="./palavra/frase/<?= $frase['idpalavra'] ?>">
            <img class="img-fluid" width="500" height="300" src="<?=$frase['imagemen']?>" alt="">
            <figcaption class="text-center"><?=$frase['tituloen']?></figcaption>
          </a>
        </div>
      <?php endforeach; ?>
      </div>
    </div>
  </div>
    <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
        
        <img src="./publico/images/brasil.png" alt="libras_opção">


      </a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
        
        <img height="188" width="268" src="./publico/images/eua.png">

      </a>
    </div>
  </div>
</div>
  </div>
  <div class="container">
    <h2 class="text-center">Comentários </h2>
    <div class="card">
      <div class="card-body">
        <?php for ($i = 0; $i < 3; $i++) { ?>
          <div class="row">
            <div class="col-md-2">
              <img src="./publico/images/avatar.jpg" class="img img-rounded img-fluid">
              <p class="text-secondary text-center">Dia/Hora do post</p>
            </div>
            <div class="col-md-10">
              <p>
                <a class="float-left"><strong>Nome do Usuário</strong></a>
                <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                <span class="float-right"><i class="text-warning fa fa-star"></i></span>
              </p>
              <div class="clearfix"></div>
              <p>Comentário do usuário.</p>
            <!-- <p>
              <a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a>
              <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
            </p> -->
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
  <?php //if (isset($_SESSION['logado'])) {  
    ?>
    <div class="container">
      <h2 class="text-center"> Envie-nos um comentário </h2>
      <form class="form-horizontal" role="form" action="funcoes/adicionar.comentario.php" method="POST">
        <div class="form-group">
          <input type="hidden" name="idfrase" value="5">
          <label for="message" class="col-sm-2 control-label">Mensagem</label>
          <div class="col-sm-10">
            <textarea class="form-control" rows="4" maxlength="500" name="comentario" placeholder="Máximo 500 caracteres..."></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10 col-sm-offset-2">
            <button id="submit" type="submit" class="btn btn-primary"> Enviar Comentario </button>
          </div>
        </div>
      </form>
    </div>
  <?php //} 
  ?>
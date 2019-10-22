 <div class="container">
   <div class="row m-5">
     <div class="col-lg-9 col-md-10">
       <div class="tab-content" id="v-pills-tabContent">
         <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
           <img class="img-fluid" width="700" height="450" data-gifffer="<?=$palavra['imagembr']?>" alt="">
           <h4 class="text-center titulo"><?=$palavra['titulobr']?></h4>
           <h3 class="mt-5 text-center cabecalho title"><?=ucfirst($palavraPai['titulobr'])?></h3>
           <div class="row">
           <?php foreach ($palavrasDoMesmoTema as $frase) : ?>
             <div class="col-md-3 col-sm-6 mb-4">
               <img class="img-fluid" width="500" height="100" data-gifffer="<?=$frase['imagembr']?>" alt="">
               <a href="./palavra/frase/<?= $frase['idpalavra'] ?>">
                 <figcaption class="text-center"><?=$frase['titulobr']?></figcaption>
               </a>
             </div>
           <?php endforeach; ?>
            </div>
         </div>
         <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
           <img class="img-fluid" width="700" height="394" data-gifffer="<?=$palavra['imagemen']?>" alt="">
           <h4 class="text-center titulo"><?=$palavra['tituloen']?></h4>
           <h3 class="mt-5 text-center cabecalho title"><?=ucfirst($palavraPai['tituloen'])?></h3>
           <div class="row">
           <?php foreach ($palavrasDoMesmoTema as $frase) : ?>
             <div class="col-md-3 col-sm-6 mb-4">
               <img class="img-fluid" width="500" height="100" data-gifffer="<?=$frase['imagemen']?>" alt="">
               <a href="./palavra/frase/<?=$frase['idpalavra']?>">
                 <figcaption class="text-center"><?=$frase['tituloen']?></figcaption>
               </a>
             </div>
           <?php endforeach; ?>
           </div>
         </div>
       </div>
     </div>
     <div class="col-lg-3 col-md-2 col-sm-8">
       <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

         <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
           <img height="188" width="300" src="./publico/images/brasil.png" alt="libras_opção">
         </a>
   
  
         <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
           <img height="188" width="300" src="./publico/images/eua.png" alt="asl_opção">
         </a>

       </div>
     </div>
   </div>
 </div>
 <div class="container">
   <h2 class="text-center mt-2 cabecalho title">Comentários </h2><br>
   <div class="card">
     <div class="card-body">
       <?php foreach ($comentarios as $comentario) : ?>
         <div class="row">
           <div class="col-md-2">
             <img src="./publico/images/avatar.jpg" class="img img-rounded img-fluid">
             <p class="text-secondary text-center">Dia/Hora do post</p>
           </div>

           <?php
foreach ($todos_usuarios as $usuario_comentario) {
  if($usuario_comentario['idusuario'] == $comentario['idusuario']) {
    $nome_usuario = $usuario_comentario['nome']; 
  }
  if (isset($_SESSION['logado'])) {
    if ($_SESSION['logado']['idusuario'] == $comentario['idusuario']) {
      $excluir_comentario = 1;
    } else {
      $excluir_comentario = 0;
    }
  } else {
    $excluir_comentario = 0;
  }
}
?>
           <div class="col-md-10">
             <p>
               <a class="float-left"><strong><?=$nome_usuario?></strong></a>
             </p>
             <div class="clearfix"></div>
             <p><?=$comentario['comentario']?></p>
             <?php if($excluir_comentario == 1) : ?>
             <a href="palavra/ExcluirComentario/<?= $comentario['idcomentario'] ?>"> Excluir Comentario </a>
              <?php endif; ?>
           </div>
         </div>
       <?php endforeach; ?>
     </div>
   </div>
 </div>
 <?php if (isset($_SESSION['logado'])) {  
  ?>
  <br><br>
 <div class="container">
   <h2 class="text-center cabecalho title"> Envie-nos um comentário </h2>
   <form class="form-horizontal" role="form" action="palavra/comentario/" method="POST">
     <div class="form-group">
       <input type="hidden" name="idpalavra" value="<?=$palavra['idpalavra'] ?>">
       <label for="comentario" class="col-sm-2 control-label cabecalho">Mensagem</label>
       <div class="col-sm-10">
         <textarea class="form-control" rows="4" maxlength="500" id="comentario" name="comentario" placeholder="Máximo 500 caracteres..."></textarea>
       </div>
     </div>
     <div class="form-group">
       <div class="col-sm-10 col-sm-offset-2">
         <button id="submit" type="submit" class="btn btn-primary cabecalho"> Enviar Comentario </button>
       </div>
     </div>
   </form>
 </div>
 <?php } 
  ?>
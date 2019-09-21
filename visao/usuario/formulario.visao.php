 <?php
    if (isset($erros)) {
        $erros = $erros;
    }
    ?>

 <div class="container login-container">
     <div class="row">
         <div class="col-md-6 login-form-1">
             <h3>Cadastre-se</h3>
             <form action="" method="POST">
                 <div class="form-group">
                     <input name="nome" type="text" class="form-control" placeholder="Nome Completo *" value="">
                 </div>
                 <p class="erro text-center">
                     <?=@verificarErro($erros, 'nome')?>
                 </p>
                 <div class="form-group">
                     <input name="email" type="text" class="form-control" placeholder="Email *" value="">
                 </div>
                 <p class="erro text-center">

                     <?=@verificarErro($erros, 'email')?>

                 </p>
                 <div class="form-group">
                     <input name="senha" type="password" class="form-control" placeholder="Senha *" value="">
                 </div>
                 <p class="erro text-center">
                     <?=@verificarErro($erros, 'senha')?>
                 </p>
                 <center>
                     <div class="form-group">
                         <span style="color: white;"> Ouvinte:</span>
                         <br>
                         <div class="form-check form-check-inline">
                             <input name="ouvinte" class="form-check-input" id="inlineRadio1" type="radio" value="S">
                             <label class="form-check-label" for="inlineRadio1" style="color: white;">Sim</label>
                         </div>
                         <div class="form-check form-check-inline">
                             <input name="ouvinte" class="form-check-input" id="inlineRadio2" type="radio" value="N">
                             <label class="form-check-label" for="inlineRadio2" style="color: white;">Não</label>
                         </div>
                     </div>
                 </center>
                 <p class="erro text-center">
<?=@verificarErro($erros,'ouvinte')?>
                 </p>
                 <div class="form-group">
                     <button type="submit" class="btnSubmit Cadastro"> CADASTRAR</button>
                 </div>
             </form>

         </div>
         <div class="col-md-6 login-form-2">
             <div class="login-logo">
                 <img src="./publico/images/mao.png" id="login_image" alt="" data-toggle="modal" data-target="#modalExemplo">
                 <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Como se cadastrar e acessar o sistema.</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                     <span aria-hidden="true">&times;</span>
                                 </button>
                             </div>
                             <div class="modal-body">
                                 ...
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <h3>Entre</h3>
             <form action="login" method="POST">
                 <div class="form-group">
                     <input name="emaillogin" type="text" class="form-control" placeholder="Email *">
                 </div>
                 <div class="form-group">
                     <input name="passwordlogin" type="password" class="form-control" placeholder="Senha *">
                 </div>
                 <p class="erro_login text-center">
                 </p>
                 <div class="form-group">
                     <button type="submit" class="btnSubmit Entrar"> ENTRAR</button>
                 </div>
             </form>
         </div>
     </div>
 </div>
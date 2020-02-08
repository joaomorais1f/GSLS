 <div class="container">
     <div class="row">
         <div class="col-lg-6 login-form-2 dados">
             <h3>Dados da Conta</h3>
             <form action="conta/dados" method="POST">
                 <div class="form-group">
                     <input name="nome" type="text" class="form-control" placeholder="Nome *" value="<?= $_SESSION['logado']['nome'] ?>">
                 </div>
                 <div class="form-group">
                     <input name="email" type="text" class="form-control" placeholder="Email *" value="<?= $_SESSION['logado']['email'] ?>">
                 </div>
                 <div class=" form-group">
                     <input name="senha" type="password" class="form-control" placeholder="Senha *" value="<?= $_SESSION['logado']['senha'] ?>">
                 </div>
                 <input type="hidden" name="idusuario" value="<?= $_SESSION['logado']['idusuario'] ?>">
                 <div class=" form-group">
                     <button type="submit" class="btnSubmit Entrar"> ALTERAR DADOS</button>
                 </div>
             </form>
             <div class="form-group">
                 <a href="conta/delete/<?= $_SESSION['logado']['idusuario'] ?>" class="col-12 btn btn-danger button-href text-center" data-toggle="modal" data-target="#exampleModal"> EXCLUIR CONTA </a>
             </div>
         </div>
         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title cabecalho" id="exampleModalLabel">Excluir Permanentemente a conta</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body cabecalho">
                         Você tem certeza que deseja excluir sua conta?
                     </div>
                     <div class="modal-footer">
                         <a href="conta/delete/<?= $_SESSION['logado']['idusuario'] ?>" class="btn btn-danger button-href text-center cabecalho"> Excluir Conta </a>
                         <button type="button" class="btn btn-secondary cabecalho" data-dismiss="modal">Fechar</button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

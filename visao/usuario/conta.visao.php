 <div class="container login-container">
     <div class="row">
         <div class="col-md-6 login-form-2 m-auto">
             <h3>Dados da Conta</h3>
             <form action="conta/dados" method="POST">
                 <div class="form-group">
                     <input name="nome" type="text" class="form-control" placeholder="Nome *" value="<?= $_SESSION['logado']['nome'] ?>">
                 </div>
                 <div class="form-group">
                     <input name="email" type="text" class="form-control" placeholder="Email *" value="<?= $_SESSION['logado']['email'] ?>">
                 </div>
                 <div class=" form-group">
                     <input name="email" type="password" class="form-control" placeholder="Senha *" value="<?= $_SESSION['logado']['senha'] ?>">
                 </div>
                 <input type="hidden" name="idusuario" value="<?=$_SESSION['logado']['idusuario']?>">
                 <div class=" form-group">
                     <button type="submit" class="btnSubmit Entrar"> ALTERAR DADOS</button>
                 </div>
             </form>
            <div class="form-group">
                <a href="conta/delete/<?=$_SESSION['logado']['idusuario']?>" class="form-control btn-danger button-href text-center"> EXCLUIR CONTA </a>
            </div>
         </div>
     </div>
 </div>

 <?php
    print_r($_SESSION['logado']);


    ?>
<?php
session_start();
require('topo.php');
include('funcao.php');
conecta();
?>
<div style="text-align: center">
<section class="hero is-success is-fullheight">
 
  <div class="container-fluid">
   <div class="login-form">
    <div class="main-div">
      <div class="panel">

       <h1>Cadastros</h1>

        <div class="alert alert-dark" role="alert">
            <p>Por favor, entre com seu email e sua senha</p>
      
        
     <?php
     if(isset($_SESSION['nao_autenticado'])){
      ?>
     <div class="alert alert-danger" role="alert">
        Usuário e/ou senha inválidos!
     </div>
      <?php
}
    unset($_SESSION['nao_autenticado']);
    ?>


    <div id="cover-caption">
        <div id="container" class="container">
            <div class="row">
                <div class="col-sm-10 offset-sm-1 text-center">
                    <h2 class="display-3">login admin</h2>
                    <div class="info-form">
                        <form action="login.php" method="POST" class="form-inline justify-content-center">
                            <div class="form-group">
                                <label class="sr-only">Email</label>
                                <input type="email" class="form-control" placeholder="exemplo@email.com" name="email">
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Senha</label>
                                <input type="password" class="form-control" placeholder="password" name="senha">
                            </div>
                            <div>Lembrar senha: <input type="checkbox" name="lembrar-senha"></div>
                             <button type="submit" class="btn btn-primary" name="btn-enviar">Login</button>
                        </form>
                    </div>
                    <br>

                    <a href="#nav-main" class="btn btn-secondary-outline btn-sm" role="button">↓</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<form id="Login" action="login.php" method="POST" class="form-inline justify-content-center">>
    <div class="form-group col-md-5">
        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
    </div>
    <div class="form-group col-md-5">
        <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
    </div>
    <div>Lembrar senha: <input type="checkbox" name="lembrar-senha"></div>
      <button type="submit" class="btn btn-primary" name="btn-enviar">Login</button>

 <p class="botto-text"> Designed by Jefferson Lima</p>
</div>
</div>
</form>
</section>-->
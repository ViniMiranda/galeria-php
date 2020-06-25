<head>
  <link rel="stylesheet" href="./assets/css/login.css">
</head>

<body>
  <div id="login">

    <div class="container vertical">
      <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
          <div id="login-box" class="col-md-12">
            <!-- MENSGEM DE ERRO -->

              <?php
              // checa se existe mensagem na sessao
              if(isset($_SESSION['msg'])){
                echo('<div class="alert alert-danger" role="alert">'.$_SESSION['msg'].'</div>');
                // reseta mensagem de erro
                unset($_SESSION['msg']); 
              } ?>
            
            <!-- FORMULARIO -->
            <form id="login-form" class="form" action="./?classe=Auth&metodo=login" method="post">
              <h3 class="text-info">Iniciar Sessão</h3>
              <p>com uma conta já existente</p>

              <div class="form-group">
                <label for="email" class="text-info">Email:</label><br>
                <input type="email" name="email" id="email" class="form-control" required />
              </div>

              <div class="form-group">
                <label for="password" class="text-info">Senha:</label><br>
                <input type="password" name="senha" id="password" class="form-control" required/>
              </div>

              <div class="form-group">
                <label for="remember-me" class="text-info"><span>lembre de mim</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                <input type="submit" name="submit" class="btn btn-primary btn-block" value="Iniciar Sessão" />
              </div>

              <div id="register-link" class="text-right">
              <p>Não possui conta? <a href="./?classe=Auth&metodo=signin" class="text-info">Cadastrar</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
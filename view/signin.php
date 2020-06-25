<head>
    <link rel="stylesheet" href="./assets/css/signin.css">
</head>

<body>

    <!-- HEADER -->
    <header class="jumbotron">

    </header>


    <div class="container">
        <div class="row py-5 mt-4 align-items-center">

            <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                <img src="./assets/img/cadastro.png" alt="image" class="img-fluid mb-3 d-none d-md-block">
                <h1>Crie uma conta</h1>
                <p class="font-italic text-muted mb-0">e tenha acesso a todas as funcionalidades do sistema de galeria</p>
                </p>
            </div>

            <!-- FORMULARIO -->
            <div class="col-md-7 col-lg-6 ml-auto">
                <form action="./?classe=Auth&metodo=signin" method="post">

                    <div class="row">
                        <!-- MENSAGEM DE ERRO -->
                        <?php
                        // checa se existe mensagem na sessao
                        if (isset($_SESSION['msg'])) {
                            echo ('<div class="alert alert-danger" role="alert">' . $_SESSION['msg'] . '</div>');
                            // reseta mensagem de erro
                            unset($_SESSION['msg']);
                        } ?>

                        <!-- First Name -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted icon"></i>
                                </span>
                            </div>
                            <input id="firstName" type="text" name="nome" placeholder="Sobrenome" class="form-control bg-white border-left-0 border-md" required />
                        </div>

                        <!-- User Name -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted icon"></i>
                                </span>
                            </div>
                            <input id="lastName" type="text" name="sobrenome" placeholder="Sobrenome" class="form-control bg-white border-left-0 border-md" required />
                        </div>

                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary px-4 border-md border-right-0">
                                    <i class="fas fa-user-tag text-muted icon"></i>
                                </span>
                            </div>
                            <input id="username" type="text" name="username" placeholder="Nome de Usuário" class="form-control bg-white border-left-0 border-md" required />
                        </div>
                        <!-- Email Address -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary px-4 border-md border-right-0">
                                    <i class="fa fa-envelope text-muted icon"></i>
                                </span>
                            </div>
                            <input id="email" type="email" name="email" placeholder="Email" class="form-control bg-white border-left-0 border-md" required />
                        </div>

                        <!-- Password -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary px-4 border-md border-right-0">
                                    <i class="fa fa-lock text-muted icon"></i>
                                </span>
                            </div>
                            <input id="password" type="password" name="senha" placeholder="Senha" class="form-control bg-white border-left-0 border-md" required />
                        </div>

                        <!-- Password Confirmation -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary px-4 border-md border-right-0">
                                    <i class="fa fa-lock text-muted icon"></i>
                                </span>
                            </div>
                            <input id="passwordConfirm" type="password" name="passwordConfirm" placeholder="Confirme a Senha" class="form-control bg-white border-left-0 border-md" required />
                        </div>

                        <!-- ENVIAR -->
                        <div class="form-group col-lg-12 mx-auto mb-0">
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-primary btn-block" value="Cadastrar" />
                            </div>
                        </div>

                        <!-- OU -->
                        <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                            <div class="border-bottom w-100 ml-5"></div>
                            <span class="px-2 small text-muted font-weight-bold text-muted">OU</span>
                            <div class="border-bottom w-100 mr-5"></div>
                        </div>

                        <!-- LOGIN -->
                        <div class="text-center w-100">
                            <p class="font-weight-bold text-dark">Já é cadastrado? <a href="./" class="text-primary ml-2 text-center">Login</a></p>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
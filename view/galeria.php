<?php
// checando se usuario esta logado
if (!isset($_SESSION['user'])) {
    header('location: ..');
} else {
    require_once("./controller/CategoriaController.php");
    require_once("./controller/ImagensController.php");
    $CategoriaController = new CategoriaController();
    $ImagensController = new ImagensController();
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Galeria</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- custom CSS -->
    <link rel="stylesheet" href="./assets/css/styles.css">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/0289491e30.js" crossorigin="anonymous"></script>


</head>

<body id="body">

    <div class="wrapper">

        <!-- SIDEBAR  -->

        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="<?= $_SESSION['user']->avatar ?>" class="img img-fluid rounded" />
                <h5 class="text-center"><?= $_SESSION['user']->nome ?></h5>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Galeria</a>
                </li>
                <li>
                    <a href="./?classe=Config&metodo=view">Configurações</a>
                </li>

            </ul>

        </nav>

        <!-- CONTEUDO DA PAGINA  -->

        <div id="content">

            <!-- NAVBAR TOP -->

            <?php include('./inc/header.php'); ?>

            <!-- FOTOS -->

            <div class="container-fluid">
                <div class="row">
                    <!-- FOTOS -->
                    <?php $ImagensController->listAll()?>
                    <!-- MODALS -->


                    <!-- MODAL DAS FOTOS -->
                    <div class="modal fade" id="modalFoto" tabindex="-1" role="dialog" aria-labelledby="modalFoto" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                                    </button>
                                </div>
                                <img src="./assets/img/image.jpg" alt="image" class="img-fluid" />
                            </div>
                        </div>
                    </div>

                    <!-- MODAL DAS CATEGORIAS -->
                    <?php $CategoriaController->listAll() ?>
                    <!-- MODAL DO UPLOAD -->
                    <?php $CategoriaController->create() ?>

                </div>
                <hr class="line" />
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });

        });
    </script>


</body>

</html>
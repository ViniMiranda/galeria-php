<?php
// checando se usuario esta logado
if (!isset($_SESSION['user'])) {
    header('location: ..');
}
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item"><a>Alterar Senha</a></li>
                </ul>
                
                <form action="./?classe=Config&metodo=alterImage">
                <label for="profilePic">Alterar foto de perfil:</label>
                <div class="form-group">
                    <input type="file" class="form-control" id="profilePic" name="profilePic" />
                </div>
            </form>
            </div>

            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="btn btn-outline-dark">
            <i class="fas fa-align-left"></i>
            <span>Menu</span>
        </button>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-align-justify"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item item-icon">
                    <a class="nav-link" href="# "><i class="fa fa-upload" aria-hidden="true"></i>
                        Upload</a>
                </li>

                <li class="nav-item item-icon">
                    <a href="" class="nav-link" data-toggle="modal" data-target="#modalCategoria"><i class="fa fa-plus-circle" aria-hidden="true"></i>Nova
                        Categoria</a>
                </li>

                <li class="nav-item item-icon">
                    <a class="nav-link" href=""><i class="fa fa-sign-out" aria-hidden="true"></i>Sair</a>
                </li>

                <li class="nav-item item-icon">
                    <button class="nav-link" onclick="darkTheme()"><i id="darkButton"class="far fa-moon"></i></button>
                </li>


            </ul>
        </div>
    </div>
</nav>

<script>
    // funcao do tema escuro
    function darkTheme() {
        var isOn = true;
        var button = document.getElementById("darkButton")
        var body = document.getElementById("body");

        body.classList.toggle("darkTheme");
        
        if(button.className === "far fa-moon"){
            button.classList.replace('far','fas')
        }
        else{
            button.classList.replace('fas','far')
        }
        
    }
</script>
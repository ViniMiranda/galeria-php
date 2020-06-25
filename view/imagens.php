<!-- FOTOS -->




<div class="container-fluid">
    <div class="row">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#all" role="tab" aria-controls="home" aria-selected="true">Todos</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
            </li>

        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="home-tab">

                <div class="col-md-12">
                    <div class="gal">
                        <?php foreach ($imagens as $i) { ?>
                            <a type="button" data-toggle="modal" data-target="#modalFoto"><img src="<?=$i->caminho?>" alt="image" class="" /></a>
                        <?php } ?>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">fotos
            </div>
        </div>
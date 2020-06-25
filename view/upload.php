<!-- MODAL DO UPLOAD -->
<div class="modal fade" id="modalUpload" tabindex="-1" role="dialog" aria-labelledby="modalUpload" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="upload-modal">Upload de fotos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <!-- MENSAGEM DE ERRO -->
                <?php
                // checa se existe mensagem na sessao
                if (isset($_SESSION['msg'])) {
                    echo ('<div class="alert alert-danger" role="alert">' . $_SESSION['msg'] . '</div>');
                    // reseta mensagem de erro
                    unset($_SESSION['msg']);
                } ?>
                <form action="./?classe=Upload&metodo=upload" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="file" class="form-control" id="image" name="image" required />
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="imageupload">
                            <option value="0">Nenhuma</option>

                            <?php foreach ($categorias as $c) { ?>
                                <option value="<?= $c->id ?>"><?= $c->nome ?></option>
                            <?php } ?>
                        </select>
                        <div class="modal-footer">
                            <input type="submit" value="Upload Image" name="submit">
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
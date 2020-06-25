<?php
// checando se usuario esta logado
if (!isset($_SESSION['user'])) {
    header('location: ..');
}
?>
<!-- MODAL DAS CATEGORIAS -->
<div class="modal fade" id="modalCategoria" tabindex="-1" role="dialog" aria-labelledby="modalCategoria" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="categoria-modal">Adicionar categoria de foto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <form action="./?classe=Categoria&metodo=create" method="post">
                    <div class="form-group">
                        <label for="categoria">Nome da categoria: </label>
                        <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Ex: férias, Alemanha, comida..." required />
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
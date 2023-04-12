<div class="contenedor">
    <div class="modal fade edit-modal" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <form id="editForm">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="edit-modal-title"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="edit-id">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="edit_nombre"
                                placeholder="Escriba el nombre del artículo">
                            <span id="edit_nombre_error" class="text-danger error-messages"></span>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Descripcion</label>
                            <input type="text" class="form-control" name="descripcion" id="edit_descripcion"
                                placeholder="Escriba una pequeña descripción">
                            <span id="edit_descripcion_error" class="text-danger error-messages"></span>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Tipo de Artículo</label>
                            <select class="tipoArticulo_id form-select form-select-sm" name="tipo_articulo" id="edit_tipo_articulo"
                                aria-label=".form-select-sm example">
                                <option selected>Selecciona una opcion</option>
                                <option value="Herramienta">Herramienta</option>
                                <option value="Alimentos">Alimentos</option>
                            </select>
                            <span id="edit_tipo_articulo_error" class="text-danger fw-bolder error-messages"></span>
                        </div>    
                    </div>
                    <div class="modal-footer">
                        <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" id="updateBtn" class=" updateBtn save-Btn btn btn-primary">Guardar</button>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>



<div class="contenedor">
    <div class="modal fade edit-modal" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form id="editForm">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="edit-modal-title"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" class="form-control" name="id" id="edit_id">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="edit_nombre"
                                placeholder="Escriba el nombre de la Imagen">
                            <span id="edit_nombre_error" class="text-danger fw-bolder error-messages"></span>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Descripcion</label>
                            <input type="text" class="form-control" name="descripcion" id="edit_descripcion"
                                placeholder="Escriba una pequeña descripción">
                            <span id="edit_descripcion_error" class="text-danger fw-bolder error-messages"></span>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Estado</label>
                            <select class="tipoPersona_id form-select form-select-sm" name="estado" id="edit_estado"
                                aria-label=".form-select-sm example">
                                <option value="" selected>Selecciona una opcion</option>
                                <option value="1">Visible</option>
                                <option value="0">No Visible</option>
                            </select>
                            <span id="edit_estado_error" class="text-danger fw-bolder error-messages"></span>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Categoria Imagen </label>
                            <select class="edit_categoria_imagen form-select form-select-sm" name="categoria_imagen"
                                id="edit_categoria_imagen" aria-label=".form-select-sm example">
                                <option value="" selected>Selecciona una opcion</option>
                                <option value="Flora">Flora</option>
                                <option value="Fauna">Fauna</option>
                                <option value="Flora y Fauna">Flora y Fauna</option>
                            </select>
                            <span id="edit_categoria_imagen_error" class="text-danger fw-bolder error-messages"></span>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Imagen</label>
                            <input type="file" class="form-control" name="file" id="edit_file">
                            <span id="nombre_archivo"></span>
                            <span id="edit_file_error" class="text-danger fw-bolder error-messages"></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" id="updateBtn" class="updateBtn btn btn-primary"></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

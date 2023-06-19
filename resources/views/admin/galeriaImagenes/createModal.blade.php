<div class="contenedor">
    <div class="modal fade create-modal" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <form id="createForm" enctype="multipart/form-data">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="create-modal-title"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" class="form-control" name="id" id="id">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre"
                                placeholder="Escriba el nombre de la Imagen">
                            <span id="nombre_error" class="text-danger fw-bolder error-messages"></span>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Descripcion</label>
                            <input type="text" class="form-control" name="descripcion" id="descripcion"
                                placeholder="Escriba una pequeña descripción">
                            <span id="descripcion_error" class="text-danger fw-bolder error-messages"></span>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Estado</label>
                            <select class="tipoPersona_id form-select form-select-sm" name="estado" id="estado"
                                aria-label=".form-select-sm example">
                                <option selected>Selecciona una opcion</option>
                                <option value="1">Visible</option>
                                <option value="0">No Visible</option>
                            </select>
                            <span id="estado_error" class="text-danger fw-bolder error-messages"></span>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Categoria de Imagen </label>
                            <select class="tipo_campanna form-select form-select-sm" name="categoria_imagen"
                                id="categoria_imagen" aria-label=".form-select-sm example">
                                <option selected>Selecciona una opcion</option>
                                <option value="Flora">Flora</option>
                                <option value="Fauna">Fauna</option>
                                <option value="Flora y Fauna">Flora y Fauna</option>
                            </select>
                            <span id="categoria_imagen_error" class="text-danger fw-bolder error-messages"></span>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Imagen</label>
                            <input type="file" class="form-control" name="file" id="file">
                            <span id="file_error" class="text-danger fw-bolder error-messages"></span>
                        </div>
                        <div class="mb-3">
                            <img style="width:50%" id="preview">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" id="saveBtn" class="save-Btn btn btn-primary"></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

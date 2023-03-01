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
                        <input type="hidden" class="form-control" name="id" id="edit_id">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="edit_nombre"
                                placeholder="Escriba el nombre del documento">
                            <span id="edit_nombre_error" class="text-danger fw-bolder error-messages"></span>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Descripcion</label>
                            <input type="text" class="form-control" name="descripcion" id="edit_descripcion"
                                placeholder="Escriba una pequeña descripción (Opcional)">
                            <span id="edit_descripcion_error" class="text-danger fw-bolder error-messages"></span>
                        </div>
                        <div class="mb-3">
                             <label for="formGroupExampleInput2" class="form-label">Estado</label>
                             <select class="tipoPersona_id form-select form-select-sm" name="estado" id="edit_estado"
                                 aria-label=".form-select-sm example">
                                 <option selected>Selecciona una opcion</option>
                                 <option value="1">Activo</option>
                                 <option value="0">Inactivo</option>
                             </select>
                             <span id="edit_estado_error" class="text-danger fw-bolder error-messages"></span>
                         </div>
                         <div class="mb-3">
                             <label for="formGroupExampleInput2" class="form-label">Tipo de Documento </label>
                             <select class="tipo_campanna form-select form-select-sm" name="tipo_documento"
                                 id="edit_tipo_documento" aria-label=".form-select-sm example">
                                 <option selected>Selecciona una opcion</option>
                                 <option value="Publico">Público</option>
                                 <option value="Privado">Privado</option>
                             </select>
                             <span id="edit_tipo_documento_error" class="text-danger fw-bolder error-messages"></span>
                         </div>
                         <div class="mb-3">
                             <label for="formGroupExampleInput2" class="form-label">Documento</label>
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



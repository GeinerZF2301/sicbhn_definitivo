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
                        <div class="text-center mt-2">
                            <span id="edit_validacion_success" class="text-success fw-bolder success-mesages p-2"></span>
                            <span id="edit_validacion_error" class="text-danger fw-bolder rounded p-2 error-messages"></span>
                        </div>
                        <div class="row">
                            <input type="hidden" class="form-control" name="id" id="edit_id">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="edit_nombre"
                                    placeholder="Escriba el nombre de la campaña">
                                <span id="edit_nombre_error" class="text-danger error-messages"></span>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Descripcion</label>
                                <input type="text" class="form-control" name="descripcion" id="edit_descripcion"
                                    placeholder="Escriba una pequeña descripción">
                                <span id="edit_descripcion_error" class="text-danger error-messages"></span>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">ubicacion</label>
                                <input type="text" class="form-control" name="ubicacion" id="edit_ubicacion"
                                    placeholder="Escriba una pequeña descripción">
                                <span id="edit_ubicacion_error" class="text-danger error-messages"></span>
                            </div>
                            <div class="d-flex-justify-content-center">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">fecha</label>
                                    <input type="date" class="form-control" name="fecha" id="edit_fecha"
                                        placeholder="Escriba una pequeña fecha">
                                    <span id="edit_fecha_error" class="text-danger error-messages"></span>
                                </div>
                            </div>


                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Hora</label>
                                <input type="time" class="form-control" name="hora" id="edit_hora">
                                <span id="edit_hora_error" class="text-danger error-messages"></span>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Tipo de campaña </label>
                                <select class="tipoPersona_id form-select form-select-sm" name="tipo_campaña"
                                    id="edit_tipo_campaña" aria-label=".form-select-sm example">
                                    <option value="" selected>Selecciona una opcion</option>
                                    <option value="Conservación Ambiental">Conservación Ambiental</option>
                                    <option value="Educación Ambiental">Educación Ambiental</option>
                                </select>
                                <span id="edit_tipo_campana_error" class="text-danger error-messages"></span>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Estado</label>
                                <select class="tipoPersona_id form-select form-select-sm" name="estado"
                                    id="edit_estado" aria-label=".form-select-sm example">
                                    <option value="" selected>Selecciona una opcion</option>
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                                <span id="edit_estado_error" class="text-danger error-messages"></span>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" id="updateBtn" class="updateBtn btn btn-primary"></button>
                    </div>
                </div>
        </form>
    </div>
</div>

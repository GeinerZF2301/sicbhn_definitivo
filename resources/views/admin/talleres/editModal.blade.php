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
                                    placeholder="Escriba el nombre de la campaña" >
                                <span id="nombre_error" class="text-danger error-messages"></span>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Descripcion</label>
                                <input type="text" class="form-control" name="descripcion" id="edit_descripcion"
                                    placeholder="Escriba una pequeña descripción">
                                <span id="descripcion_error" class="text-danger error-messages"></span>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">ubicacion</label>
                                <input type="text" class="form-control" name="ubicacion" id="edit_ubicacion"
                                    placeholder="Escriba una pequeña descripción">
                                <span id="ubicacion_error" class="text-danger error-messages"></span>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Cupo</label>
                                <input type="number" class="form-control" name="cupo" id="edit_cupo"
                                    placeholder="Escriba el cupo">
                                <span id="edit_cupo_error" class="text-danger fw-bolder error-messages"></span>
                            </div>
                            <div class="d-flex-justify-content-center">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">fecha</label>
                                    <input type="date" class="form-control" name="fecha" id="edit_fecha"
                                        placeholder="Escriba una pequeña fecha">
                                    <span id="fecha_error" class="text-danger error-messages"></span>
                                </div>
                            </div>


                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Hora</label>
                                <input type="time" class="form-control" name="hora" id="edit_hora">
                                <span id="hora_error" class="text-danger error-messages"></span>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Tipo de taller </label>
                                <select class="tipoPersona_id form-select form-select-sm" name="tipo_taller"
                                    id="edit_tipo_taller" aria-label=".form-select-sm example">
                                    <option selected>Selecciona una opcion</option>
                                    <option value="Conservación Ambiental">Conservación Ambiental</option>
                                    <option value="Educación Ambiental">Educación Ambiental</option>
                                </select>
                                <span id="tipo_campaña_error" class="text-danger error-messages"></span>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Estado</label>
                                <select class="tipoPersona_id form-select form-select-sm" name="estado"
                                    id="edit_estado" aria-label=".form-select-sm example">
                                    <option selected>Selecciona una opcion</option>
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                                <span id="estado_error" class="text-danger error-messages"></span>
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

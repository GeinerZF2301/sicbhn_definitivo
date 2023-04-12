<div class="contenedor">
    <div class="modal fade create-modal " id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <form id="createForm">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="create-modal-title"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center mt-2">
                            <span id="validacion_success" class="text-success fw-bolder success-mesages p-2"></span>
                            <span id="validacion_error" class="text-danger fw-bolder rounded p-2 error-messages"></span>
                        </div>
                        <div class="row">
                            <input type="hidden" class="form-control" name="id" id="id" >
                            <div class="mb-3 mt-2">
                                <label for="formGroupExampleInput" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre"
                                    placeholder="Escriba el nombre de la campaña">
                                <span id="nombre_error" class="text-danger fw-bolder error-messages"></span>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Descripcion</label>
                                <input type="text" class="form-control" name="descripcion" id="descripcion"
                                    placeholder="Escriba una pequeña descripción">
                                <span id="descripcion_error" class="text-danger fw-bolder error-messages"></span>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Ubicacion</label>
                                <input type="text" class="form-control" name="ubicacion" id="ubicacion"
                                    placeholder="Escriba una pequeña descripción">
                                <span id="ubicacion_error" class="text-danger fw-bolder error-messages"></span>
                            </div>

                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Cupo</label>
                                <input type="number" class="form-control" name="cupo" id="cupo"
                                    placeholder="Escriba el cupo">
                                <span id="cupo_error" class="text-danger fw-bolder error-messages"></span>
                            </div>

                            <div class="d-flex-justify-content-center">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">fecha</label>
                                    <input type="date" class="form-control" name="fecha" id="fecha"
                                        placeholder="Escriba una pequeña fecha">
                                    <span id="fecha_error" class="text-danger fw-bolder error-messages"></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Hora</label>
                                <input type="time" class="form-control" name="hora" id="hora">
                                <span id="hora_error" class="text-danger fw-bolder error-messages"></span>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Tipo de campaña </label>
                                <select class="tipo_campanna form-select form-select-sm" name="tipo_taller"
                                    id="tipo_taller" aria-label=".form-select-sm example">
                                    <option selected>Selecciona una opcion</option>
                                    <option value="Conservación Ambiental">Conservación Ambiental</option>
                                    <option value="Educación Ambiental">Educación Ambiental</option>
                                    <option value="otro">Otro, Especifique...</option>
                                </select>
                                <span id="tipo_taller_error" class="text-danger fw-bolder error-messages"></span>
                            </div>
                            <div id="otroInput" style="display:none;">
                                <input type="text" class="form-control" id="otro_tipo"
                                    placeholder="Escriba el tipo de campaña al que pertenece" >
                                <button class="btn-dark rounded mt-2 mb-3" id="otroBtn">Guardar</button>
                                <span id="tipo_campaña_error" class="text-danger fw-bolder error-messages"></span>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Estado</label>
                                <select class="tipoPersona_id form-select form-select-sm" name="estado" id="estado"
                                    aria-label=".form-select-sm example">
                                    <option selected>Selecciona una opcion</option>
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                                <span id="estado_error" class="text-danger fw-bolder error-messages"></span>
                            </div>


                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" id="saveBtn" class="save-Btn btn btn-primary"></button>
                    </div>
                </div>
            </div>
    </div>
    </form>
</div>
</div>

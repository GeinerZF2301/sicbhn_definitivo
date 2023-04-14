<div class="contenedor">
    <div class="modal fade show-modal" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form id="showForm">
            @csrf
            <div class="modal-dialog modal-xl ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="show-modal-title"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="hidden" class="form-control" name="id" id="show_id">
                                <span id="validacion_error" class="text-danger error-messages"></span>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" id="show_nombre"
                                        placeholder="Escriba el nombre de la campaña" disabled>
                                    <span id="nombre_error" class="text-danger error-messages"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Descripcion</label>
                                    <input type="text" class="form-control" name="descripcion" id="show_descripcion"
                                        placeholder="Escriba una pequeña descripción" disabled>
                                    <span id="descripcion_error" class="text-danger error-messages"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Ubicacion</label>
                                    <input type="text" class="form-control" name="ubicacion" id="show_ubicacion"
                                        placeholder="Escriba una pequeña descripción" disabled>
                                    <span id="ubicacion_error" class="text-danger error-messages"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Cupo</label>
                                    <input type="text" class="form-control" name="cupo" id="show_cupo"
                                        placeholder="Escriba una pequeña descripción" disabled>
                                    <span id="cupo_error" class="text-danger error-messages"></span>
                                </div>

                                <div class="d-flex-justify-content-center">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">fecha</label>
                                        <input type="date" class="form-control" name="fecha" id="show_fecha"
                                            placeholder="Escriba una pequeña fecha" disabled>
                                        <span id="fecha_error" class="text-danger error-messages"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Hora</label>
                                    <input type="time" class="form-control" name="hora" id="show_hora" disabled>
                                    <span id="hora_error" class="text-danger error-messages"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Tipo de campaña </label>
                                    <select class="tipoPersona_id form-select form-select-sm" name="tipo_campaña"
                                        id="show_tipo_campaña" aria-label=".form-select-sm example" disabled>
                                        <option selected>Selecciona una opcion</option>
                                        <option value="Conservación Ambiental">Conservación Ambiental</option>
                                        <option value="Educación Ambiental">Educación Ambiental</option>
                                    </select>
                                    <span id="tipo_campaña_error" class="text-danger error-messages"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Estado</label>
                                    <select class="tipoPersona_id form-select form-select-sm" name="estado" id="show_estado"
                                        aria-label=".form-select-sm example" disabled>
                                        <option selected>Selecciona una opcion</option>
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</option>
                                    </select>
                                    <span id="estado_error" class="text-danger error-messages"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
        </form>
    </div>
</div>

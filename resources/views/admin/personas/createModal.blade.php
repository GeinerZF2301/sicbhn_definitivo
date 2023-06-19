<div class="contenedor">
    <div class="modal fade create-modal" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <form id="createForm">
            @csrf
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="create-modal-title"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="hidden" class="form-control" name="id" id="id">
                                
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre"
                                        placeholder="Escriba el nombre de la persona">
                                    <span id="nombre_error" class="text-danger fw-bolder error-messages"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Apellidos</label>
                                    <input type="text" class="form-control" name="apellidos" id="apellidos"
                                        placeholder="Escriba los apellidos de la persona">
                                    <span id="apellidos_error" class="text-danger fw-bolder error-messages"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Tipo de
                                        Identificacion</label>
                                    <select class="form-select form-select-sm " name="tipo_identificacion"
                                        id="tipo_identificacion" aria-label=".form-select-sm example">
                                        <option selected>Selecciona una opcion</option>
                                        <option value="Cédula Nacional">Cédula Nacional</option>
                                        <option value="Cédula de Residencia">Cédula de Residencia</option>
                                        <option value="Pasaporte">Pasaporte</option>
                                    </select>
                                    <span id="tipo_identificacion_error" class="text-danger fw-bolder error-messages"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Número de
                                        Identificación</label>
                                    <input type="text" class="form-control" name="numero_identificacion"
                                        id="numero_identificacion"
                                        placeholder="Escriba el numero de identificacion de la persona">
                                    <span id="numero_identificacion_error" class="text-danger fw-bolder error-messages"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Fecha de
                                        Nacimiento</label>
                                    <input type="date" class="form-control" name="fecha_de_nacimiento"
                                        id="fecha_de_nacimiento"
                                        placeholder="Proporcione la fecha de nacimiento de la persona">
                                    <span id="fecha_de_nacimiento_error" class="text-danger fw-bolder error-messages"></span>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Edad</label>
                                    <input type="int" class="form-control" name="edad" id="edad"
                                        placeholder="Edad de la persona" disabled >
                                    <span id="edad_error" class="text-danger fw-bolder error-messages"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Pais</label>
                                    <input type="text" class="form-control" name="pais" id="pais"
                                        placeholder="Escriba el pais">
                                    <span id="pais_error" class="text-danger fw-bolder error-messages"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Provincia o Ciudad</label>
                                    <input type="text" class="form-control" name="ciudad" id="ciudad"
                                    placeholder="Escriba la Provincia o Ciudad">
                                    <span id="ciudad_error" class="text-danger fw-bolder error-messages"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Distrito o Calle </label>
                                    <input type="text" class="form-control" name="calle" id="calle"
                                        placeholder="Calle (opcional)">
                                    <span id="calle_error" class="text-danger fw-bolder error-messages"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Tipo de Persona </label>
                                    <select class="tipoPersona_id  form-select form-select-sm" name="tipo_persona_id"
                                        id="tipo_persona_id" aria-label=".form-select-sm example">
                                        <option selected>Selecciona una opcion</option>
                                    </select>
                                    <span id="tipo_persona_id_error" class="text-danger fw-bolder error-messages"></span>
                                </div>
                                <input type="hidden" class="form-control" value="Creado desde Admin" name="estado" id="estado">
                            </div>
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

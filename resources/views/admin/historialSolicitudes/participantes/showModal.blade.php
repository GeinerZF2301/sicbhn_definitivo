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
                                <input type="hidden" class="id form-control" name="id" id="show_id">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" id="show_nombre"
                                        placeholder="Escriba el nombre de la persona" disabled>
                                    <span id="nombre_error" class="text-danger error-messages"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Apellidos</label>
                                    <input type="text" class="form-control" name="apellidos" id="show_apellidos"
                                        placeholder="Escriba los apellidos de la persona" disabled>
                                    <span id="apellidos_error" class="text-danger error-messages"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Tipo de
                                        Identificacion</label>
                                    <select class="form-select form-select-sm " id="show_tipo_identificacion" name="tipo_identificacion"
                                        aria-label=".form-select-sm example" disabled>
                                        <option selected>Selecciona una opcion</option>
                                        <option value="Cédula Nacional">Cédula Nacional</option>
                                        <option value="Cédula de Residencia">Cédula de Residencia</option>
                                        <option value="Pasaporte">Pasaporte</option>
                                    </select>
                                    <span id="tipo_identificacion_error" class="text-danger error-messages"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Número de
                                        Identificación</label>
                                    <input type="int" class="form-control" name="numero_identificacion"
                                        id="show_numero_identificacion"
                                        placeholder="Escriba el numero de identificacion de la persona" disabled>
                                    <span id="numero_identificacion_error" class="text-danger error-messages"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Fecha de
                                        Nacimiento</label>
                                    <input type="date" class="form-control" name="fecha_de_nacimiento"
                                        id="show_fecha_de_nacimiento"
                                        placeholder="Proporcione la fecha de nacimiento de la persona" disabled>
                                    <span id="edit_fecha_de_nacimiento_error" class="text-danger error-messages"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Edad</label>
                                    <input type="int" class="form-control" name="edad" id="show_edad"
                                        placeholder="Escriba el tipo de persona" disabled>
                                    <span id="edit_edad_error" class="text-danger error-messages"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Pais</label>
                                    <input type="text" class="form-control" name="pais" id="show_pais"
                                        placeholder="Escriba el tipo de persona" disabled>
                                    <span id="edit_pais_error" class="text-danger error-messages"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Provincia o Ciudad</label>
                                    <input type="text" class="form-control" name="ciudad" id="show_ciudad"
                                        placeholder="Escriba el tipo de persona" disabled>
                                    <span id="edit_ciudad_error" class="text-danger error-messages"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Distrito o Calle </label>
                                    <input type="text" class="form-control" name="calle" id="show_calle"
                                        placeholder="Calle" disabled>
                                    <span id="show_calle_error" class="text-danger error-messages"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Tipo de Persona </label>
                                    <select class="form-select form-select-sm" id="show_tipo_persona_id" name="tipo_persona_id"
                                        aria-label=".form-select-sm example" disabled>
                                        <option selected>Selecciona una opcion</option>  
                                    </select>
                                    <span id="show_tipo_persona_id_error" class="text-danger error-messages"></span>
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

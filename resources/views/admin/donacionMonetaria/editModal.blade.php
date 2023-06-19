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
                        <div class="text-center mt-2">
                            <span id="validacion_success" class="text-success fw-bolder success-mesages p-2"></span>
                            <span id="validacion_error" class="text-danger fw-bolder rounded p-2 error-messages"></span>
                        </div>

                        <div class="row">

                            <input type="hidden" class="form-control" name="id" id="edit_id">

                                <div class="d-flex-justify-content-center">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Fecha de Donación</label>
                                        <input type="date" class="form-control" name="fecha_donacion" id="edit_fecha_donacion"
                                            placeholder="Escriba la fecha de la donación">
                                        <span id="edit_fecha_donacion_error" class="text-danger fw-bolder error-messages"></span>
                                    </div>
                                </div>

                                <div class="d-flex-justify-content-center">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Fecha de Recepción</label>
                                        <input type="date" class="form-control" name="fecha_recibido" id="edit_fecha_recibido"
                                            placeholder="Escriba la fecha de recepción">
                                        <span id="edit_fecha_recibido_error" class="text-danger fw-bolder error-messages"></span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Descripción</label>
                                    <input type="text" class="form-control" name="descripcion" id="edit_descripcion"
                                        placeholder="Escriba una pequeña descripción">
                                    <span id="edit_descripcion_error" class="text-danger fw-bolder error-messages"></span>
                                </div> 
                                <div class="mb-3 mt-2">
                                    <label for="formGroupExampleInput" class="form-label">Monto</label>
                                    <input type="text" class="form-control" name="monto" id="edit_monto"
                                        placeholder="Escriba la cantidad de la donación">
                                    <span id="edit_monto_error" class="text-danger fw-bolder error-messages"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Donante </label>
                                    <select class="tipoPersona_id  form-select form-select-sm" name="persona_donante_id"
                                        id="edit_persona_donante_id" aria-label=".form-select-sm example">
                                        <option value="" selected>Selecciona una opcion</option>
                                    </select>
                                    <span id="edit_persona_donante_id_error" class="text-danger fw-bolder error-messages"></span>
                                </div>

                        </div>
                        
                    </div>


                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" id="updateBtn" class="updateBtn btn btn-primary">Guardar</button>
                                    </div>
                </div>
             </div>
        </form>
    </div>
</div>



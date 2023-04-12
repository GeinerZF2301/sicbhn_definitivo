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
                        <input type="hidden" name="id" id="edit-id">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Entidad Bancaria</label>
                            <input type="text" class="form-control" name="entidadBancaria" id="edit_entidadBancaria"
                                placeholder="Escriba el nombre de la entidad bancaria">
                            <span id="edit_entidadBancaria_error" class="text-danger error-messages"></span>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Número de Cuenta</label>
                            <input type="text" class="form-control" name="numeroCuenta" id="edit_numeroCuenta"
                                placeholder="Escriba el número de cuenta">
                            <span id="edit_numeroCuenta_error" class="text-danger fw-bolder error-messages"></span>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Estado</label>
                            <select class="tipoPersona_id form-select form-select-sm" name="estado"
                                id="edit_estado" aria-label=".form-select-sm example">
                                <option selected>Selecciona una opcion</option>
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                            <span id="edit_estado_error" class="text-danger error-messages"></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" id="updateBtn" class=" updateBtn save-Btn btn btn-primary">Guardar</button>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>



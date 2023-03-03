<div class="contenedor">
    <div class="modal fade show-modal" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <form id="showForm">
            @csrf
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="show-modal-title"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="formGroupExampleInput1" class="form-label">ID</label>
                            <input type="text" class="form-control " name="id" id="show_id"
                             disabled>  
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Entidad Bancaria</label>
                            <input type="text" class="form-control" name="entidadBancaria" id="show_entidadBancaria"
                             disabled>
                            
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput3" class="form-label">Número de Cuenta</label>
                            <input type="text" class="form-control" name="numeroCuenta" id="show_numeroCuenta"
                             disabled>
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
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>
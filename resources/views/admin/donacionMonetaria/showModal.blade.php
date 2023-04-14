<div class="contenedor">
    <div class="modal fade show-modal" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form id="showForm">
            @csrf
            <div class="modal-dialog modal-md ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="show-modal-title"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">

                                <input type="hidden" class="form-control" name="id" id="show_id">

                                <div class="d-flex-justify-content-center">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Fecha de Donación</label>
                                        <input type="date" class="form-control" name="fecha_donacion" id="show_fecha_donacion"
                                            placeholder="Escriba la fecha de la donación" disabled>
                                        <span id="fecha_error" class="text-danger error-messages"></span>
                                    </div>
                                </div>
                                <div class="d-flex-justify-content-center">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Fecha de Recepción</label>
                                        <input type="date" class="form-control" name="fecha_recibido" id="show_fecha_recibido"
                                            placeholder="Escriba la fecha de recepción" disabled>
                                        <span id="fecha_error" class="text-danger error-messages"></span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Descripción</label>
                                    <input type="text" class="form-control" name="descripcion" id="show_descripcion"
                                        placeholder="Escriba una pequeña descripción" disabled>
                                    <span id="descripcion_error" class="text-danger fw-bolder error-messages"></span>
                                </div> 
                                <span id="validacion_error" class="text-danger error-messages"></span>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Monto</label>
                                    <input type="text" class="form-control" name="monto" id="show_monto"
                                        placeholder="Escriba la cantidad de la donación" disabled>
                                    <span id="nombre_error" class="text-danger error-messages"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Donante </label>
                                    <select class=" form-select form-select-sm" name="persona_donante_id"
                                        id="show_persona_donante_id" aria-label=".form-select-sm example" disabled>
                                        <option selected>Selecciona una opcion</option>
                                    </select>
                                    <span id="persona_donante_id_error" class="text-danger fw-bolder error-messages"></span>
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

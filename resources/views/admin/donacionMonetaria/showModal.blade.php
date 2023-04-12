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
                                        <input type="date" class="form-control" name="fechaRecepcion" id="show_fechaRecepcion"
                                            placeholder="Escriba la fecha de la donación" disabled>
                                        <span id="fecha_error" class="text-danger error-messages"></span>
                                    </div>
                                </div>
                                <div class="d-flex-justify-content-center">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Fecha de Recepción</label>
                                        <input type="date" class="form-control" name="fechadonacion" id="show_fechadonacion"
                                            placeholder="Escriba la fecha de recepción" disabled>
                                        <span id="fecha_error" class="text-danger error-messages"></span>
                                    </div>
                                </div>

                                <span id="validacion_error" class="text-danger error-messages"></span>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Monto</label>
                                    <input type="text" class="form-control" name="monto" id="show_monto"
                                        placeholder="Escriba la cantidad de la donación" disabled>
                                    <span id="nombre_error" class="text-danger error-messages"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Donante</label>
                                    <input type="text" class="form-control" name="donante" id="show_donante"
                                        placeholder="Escriba el id del Donante" disabled>
                                    <span id="descripcion_error" class="text-danger error-messages"></span>
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

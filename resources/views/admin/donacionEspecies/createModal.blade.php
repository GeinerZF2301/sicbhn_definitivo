<div class="contenedor">
    <div class="modal fade create-modal " id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">



        <form id="createForm">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="create-modal-title">Crear una donación en Especies</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>


                    <div class="modal-body">
                        <div class="text-center mt-2">
                            <span id="validacion_success" class="text-success fw-bolder success-mesages p-2"></span>
                            <span id="validacion_error" class="text-danger fw-bolder rounded p-2 error-messages"></span>
                        </div>

                        <div class="row">

                                <input type="hidden" class="form-control" name="id" id="id">

                                <div class="d-flex-justify-content-center">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Fecha de Donación</label>
                                        <input type="date" class="form-control" name="fechaDonacion" id="fechaDonacion"
                                            placeholder="Escriba una pequeña fecha">
                                        <span id="fecha_error" class="text-danger fw-bolder error-messages"></span>
                                    </div>
                                </div>

                                <div class="d-flex-justify-content-center">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Fecha de Recepción</label>
                                        <input type="date" class="form-control" name="fechaRecepcion" id="fechaRecepcion"
                                            placeholder="Escriba una pequeña fecha">
                                        <span id="fecha_error" class="text-danger fw-bolder error-messages"></span>
                                    </div>
                                </div>
                                <div class="mb-3 mt-2">
                                    <label for="formGroupExampleInput" class="form-label">Artículo</label>
                                    <input type="text" class="form-control" name="articulo" id="articulo"
                                        placeholder="Escriba el artículo ">
                                    <span id="nombre_error" class="text-danger fw-bolder error-messages"></span>
                                </div>


                                <div class="mb-3 mt-2">
                                    <label for="formGroupExampleInput" class="form-label">Donante</label>
                                    <input type="text" class="form-control" name="donante" id="donante"
                                        placeholder="Escriba el id del Donante">
                                    <span id="nombre_error" class="text-danger fw-bolder error-messages"></span>
                                </div>



                        </div>
                      
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" id="saveBtn" class="save-Btn btn btn-primary">Guardar</button>
                    </div>
                </div>
        </div>
    </form>



</div>
</div>
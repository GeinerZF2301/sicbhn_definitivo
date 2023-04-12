<div class="contenedor">
    <div class="modal fade create-modal " id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <form id="createForm">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="create-modal-title">Agregar un artículo</h5>
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
                                <label for="formGroupExampleInput" class="form-label">Nombre </label>
                                <input type="text" class="form-control" name="nombre" id="nombre"
                                    placeholder="Escriba el nombre del artículo">
                                <span id="nombre_error" class="text-danger fw-bolder error-messages"></span>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Descripción</label>
                                <input type="text" class="form-control" name="descripcion" id="descripcion"
                                    placeholder="Escriba una pequeña descripción">
                                <span id="descripcion_error" class="text-danger fw-bolder error-messages"></span>
                            </div>  
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Tipo de Artículo</label>
                                <select class="tipo_articulo form-select form-select-sm" name="tipo_articulo" id="tipo_articulo"
                                    aria-label=".form-select-sm example">
                                    <option selected>Selecciona una opcion</option>
                                    <option value="Herramienta">Herramienta</option>
                                    <option value="Alimentos">Alimentos</option>
                                </select>
                                <span id="tipo_articulo_error" class="text-danger fw-bolder error-messages"></span>
                            </div>                         
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" id="saveBtn" class="save-Btn btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

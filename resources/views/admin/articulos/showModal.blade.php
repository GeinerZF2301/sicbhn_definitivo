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
                            <label for="formGroupExampleInput2" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="show_nombre"
                             disabled>
                            
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput3" class="form-label">Descripcion</label>
                            <input type="text" class="form-control" name="descripcion" id="show_descripcion"
                             disabled>
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


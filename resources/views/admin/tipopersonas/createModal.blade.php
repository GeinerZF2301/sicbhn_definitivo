   <div class="contenedor">
       <div class="modal fade create-modal" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel"
           aria-hidden="true">
           <form id="createForm">
               @csrf
               <div class="modal-dialog">
                   <div class="modal-content">
                       <div class="modal-header">
                           <h5 class="modal-title" id="create-modal-title"></h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                       </div>
                       <div class="modal-body">
                           <input type="hidden" class="form-control" name="id" id="id">
                           <div class="mb-3">
                               <label for="formGroupExampleInput" class="form-label">Tipo de Persona</label>
                               <input type="text" class="form-control" name="tipo_persona" id="tipo_persona"
                                   placeholder="Escriba el tipo de persona">
                               <span id="tipo_persona_error" class="text-danger error-messages"></span>
                           </div>
                           <div class="mb-3">
                               <label for="formGroupExampleInput2" class="form-label">Descripcion</label>
                               <input type="text" class="form-control" name="descripcion" id="descripcion"
                                   placeholder="Escriba una pequeña descripción">
                               <span id="descripcion_error" class="text-danger error-messages"></span>
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

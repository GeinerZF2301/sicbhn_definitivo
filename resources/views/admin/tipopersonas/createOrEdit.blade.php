   <div class="contenedor">
       <div class="modal fade ajax-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
           aria-hidden="true">
           <form id="ajaxForm">
               @csrf
               <div class="modal-dialog">
                   <div class="modal-content">
                       <div class="modal-header">
                           <h5 class="modal-title" id="modal-title"></h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                       </div>
                       <div class="modal-body">
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
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                           <button type="button" id="saveBtn" class="btn btn-primary"></button>
                       </div>

                   </div>
               </div>
           </form>
       </div>
   </div>

   <script>
       $(document).ready(function() {
           $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
           });
           $('#create-button').click(function() {
               $('#tipo_persona').val('')
               $('#descripcion').val('');
           });

           $('#modal-title').html('Crear Tipo de Persona')
           $('#saveBtn').html('Guardar tipo de Persona')

           var form = $('#ajaxForm')[0];

           $('#saveBtn').click(function() {
               $('.error-messages').html('');
               var formData = new FormData(form);
               $.ajax({
                   url: "{{ route('tipospersonas.store') }}",
                   method: "POST",
                   data: formData,
                   contentType: false,
                   processData: false,
                   success: function(response) {
                       $('.ajax-modal').modal('hide');
                       if (response) {
                           Swal.fire({
                               position: 'top-center',
                               icon: 'success',
                               title: response.success,
                               showConfirmButton: false,
                               timer: 1500
                           })
                       }
                   },
                   error: function(error) {
                       if (error.status === 422) {
                           var errors = error.responseJSON.errors;
                           console.log(errors);
                           if (errors.hasOwnProperty("tipo_persona")) {
                               $("#tipo_persona_error").html(errors.tipo_persona[0]);
                           }
                           if (errors.hasOwnProperty("descripcion")) {
                               $("#descripcion_error").html(errors.descripcion[0]);
                           }
                       } else {
                           console.error(error);
                       }
                   }
               });
           });
       });
   </script>

<?php
    namespace App\Repositories;
    use App\Repositories\Interfaces\PersonaRepositorioInterface;
    use App\Models\Persona;

    class PersonaRepositorio implements PersonaRepositorioInterface {

        public function allApprovedPersons(){
            return Persona::where('estado', 'Aprobado')->orWhere('estado', 'Creado desde Admin')->get();
        }
        public function allPendingPersons(){
            return Persona::all()->where('estado', 'Pendiente');
        }
        public function allRejectedandApprovedPersons(){
            return Persona::where('estado', 'Rechazado')
            ->orWhere('estado', 'Aprobado')->get();;
        }
        public function storePerson($data){
            return Persona::create($data);
        }
        public function findPerson($id){
            return Persona::find($id);
        }
        public function updatePerson($data, $id){
            $persona = Persona::where('id', $id)->first();
            $persona->nombre = $data['nombre'];
            $persona->apellidos = $data['apellidos'];
            $persona->tipo_identificacion = $data['tipo_identificacion'];
            $persona->numero_identificacion = $data['numero_identificacion'];
            $persona->fecha_de_nacimiento = $data['fecha_de_nacimiento'];
            $persona->edad = $data['edad'];
            $persona->pais = $data['pais'];
            $persona->ciudad = $data['ciudad'];
            $persona->calle = $data['calle'];
            $persona->estado = $data['estado'];
            $persona->tipo_persona_id = $data['tipo_persona_id'];
            
            $persona->save();
        }
        public function destroyPerson($id){
            $persona = Persona::findOrFail($id);
            $persona->delete();
        }
    }
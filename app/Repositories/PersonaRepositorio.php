<?php
    namespace App\Repositories;
    use App\Repositories\Interfaces\PersonaRepositorioInterface;
    use App\Models\Persona;

    class PersonaRepositorio implements PersonaRepositorioInterface {

        public function allPeople(){
            return Persona::latest()->paginate(10);
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
            $persona->apellido1 = $data['apellido1'];
            $persona->apellido2 = $data['apellido2'];
            $persona->numero_identificacion = $data['numero_identificacion'];
            $persona->tipo_identificacion = $data['tipo_identificacion'];
            $persona->pais = $data['pais'];
            $persona->ciudad = $data['ciudad'];
            $persona->calle = $data['calle'];
            $persona->tipo_persona_id = $data['tipo_persona_id'];
            $persona->save();
        }
        public function destroyPerson($id){
            $persona = Persona::findOrFail($id);
            $persona->delete();
        }
    }
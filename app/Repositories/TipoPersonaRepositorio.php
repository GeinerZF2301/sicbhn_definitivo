<?php
    namespace App\Repositories;
    use App\Repositories\Interfaces\TipoPersonaRepositorioInterface;
    use App\Models\TipoPersona;

    class TipoPersonaRepositorio implements TipoPersonaRepositorioInterface {

        public function allTypesOfPeople(){
            return TipoPersona::latest()->paginate(10);
        }
        public function storePersonType($data){
            return TipoPersona::create($data);
        }
        public function findPersonTypes($id){
            return TipoPersona::find($id);
        }
        public function updatePersonType($data, $id){
            $tipoPersona = TipoPersona::where('id', $id)->first();
            $tipoPersona->tipo_persona = $data['tipo_persona'];
            $tipoPersona->descripcion = $data['descripcion'];
            $tipoPersona->save();
        }
        public function destroyPersonType($id){
            $tipoPersona = TipoPersona::findOrFail($id);
            $tipoPersona->delete();
        }
    }
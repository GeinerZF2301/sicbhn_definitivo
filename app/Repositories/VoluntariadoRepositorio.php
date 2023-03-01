<?php
    namespace App\Repositories;
    use App\Repositories\Interfaces\VoluntariadoRepositorioInterface;
    use App\Models\Voluntariado;

    class VoluntariadoRepositorio implements VoluntariadoRepositorioInterface {
    
        public function allVolunteerings(){
            return Voluntariado::all();
        }
        public function storeVolunteering($data, $estado){
            $voluntariado = new Voluntariado();
            $voluntariado->nombre = $data['nombre'];
            $voluntariado->descripcion = $data['descripcion'];
            $voluntariado->ubicacion = $data['ubicacion'];
            $voluntariado->fecha = $data['fecha'];
            $voluntariado->hora = $data['hora'];
            $voluntariado->tipo_voluntariado = $data['tipo_voluntariado'];
            $voluntariado->estado = $estado;
            $voluntariado->validar_voluntariado = $estado;
            $voluntariado->save();
        }
        public function findVolunteering($id){
            return Voluntariado::findOrFail($id);
        }
        public function updateVolunteering($data, $id){
            $voluntariado = Voluntariado::where('id', $id)->first();
            $voluntariado->nombre = $data['nombre'];
            $voluntariado->descripcion = $data['descripcion'];
            $voluntariado->ubicacion = $data['ubicacion'];
            $voluntariado->fecha = $data['fecha'];
            $voluntariado->hora = $data['hora'];
            $voluntariado->tipo_voluntariado = $data['tipo_voluntariado'];
            $voluntariado->estado = $data['estado'];
            $voluntariado->validar_voluntariado = $data['estado'];
            $voluntariado->save();
        }
        public function destroyVolunteering($id){
            $voluntariado = Voluntariado::findOrFail($id);
            $voluntariado->delete();
        }
    }
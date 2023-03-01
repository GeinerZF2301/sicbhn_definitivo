<?php
    namespace App\Repositories;
    use App\Repositories\Interfaces\CampañaRepositorioInterface;
    use App\Models\Campaña;

    class CampañaRepositorio implements CampañaRepositorioInterface {
    
        public function allCampaigns(){
            return Campaña::all();
        }
        public function storeCampaign($data, $estado){
            $campaña = new Campaña();
            $campaña->nombre = $data['nombre'];
            $campaña->descripcion = $data['descripcion'];
            $campaña->ubicacion = $data['ubicacion'];
            $campaña->fecha = $data['fecha'];
            $campaña->hora = $data['hora'];
            $campaña->tipo_campaña = $data['tipo_campaña'];
            $campaña->estado = $estado;
            $campaña->validar_campaña = $estado;
            $campaña->save();
        }
        public function findCampaign($id){
            return Campaña::findOrFail($id);
        }
        public function updateCampaign($data, $id){
            $campaña = Campaña::where('id', $id)->first();
            $campaña->nombre = $data['nombre'];
            $campaña->descripcion = $data['descripcion'];
            $campaña->ubicacion = $data['ubicacion'];
            $campaña->fecha = $data['fecha'];
            $campaña->hora = $data['hora'];
            $campaña->tipo_campaña = $data['tipo_campaña'];
            $campaña->estado = $data['estado'];
            $campaña->save();
        }
        public function destroyCampaign($id){
            $campaña = Campaña::findOrFail($id);
            $campaña->delete();
        }
    }
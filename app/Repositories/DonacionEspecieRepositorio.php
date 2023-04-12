<?php
    namespace App\Repositories;
    use App\Repositories\Interfaces\DonacionEspecieRepositorioInterface;
    use App\Models\DonacionEspecie;

    class DonacionEspecieRepositorio implements DonacionEspecieRepositorioInterface {

        public function allInKindDonations(){
            return DonacionEspecie::all();
        }
        public function storeInKindDonation($data){
            return DonacionEspecie::create($data);
        }
        public function findInKindDonation($id){
            return DonacionEspecie::find($id);
        }
        public function updateInKindDonation($data, $id){
            $donacionEspecie = DonacionEspecie::where('id', $id)->first();
            $donacionEspecie->fecha_donacion = $data['fecha_donacion'];
            $donacionEspecie->fecha_recibido = $data['fecha_recibido'];
            $donacionEspecie->descripcion = $data['descripcion'];
            $donacionEspecie->persona_donante_id = $data['persona_donante_id'];
            $donacionEspecie->articulo_id = $data['articulo_id'];
            $donacionEspecie->save();
        }
        public function destroyInKindDonation($id){
            $donacionEspecie = DonacionEspecie::findOrFail($id);
            $donacionEspecie->delete();
        }
    }
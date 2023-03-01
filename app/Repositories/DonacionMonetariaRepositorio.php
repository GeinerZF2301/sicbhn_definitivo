<?php
    namespace App\Repositories;
    use App\Repositories\Interfaces\DonacionMonetariaRepositorioInterface;
    use App\Models\DonacionMonetaria;

    class DonacionMonetariaRepositorio implements DonacionMonetariaRepositorioInterface {

        public function allMonetaryDonations(){
            return DonacionMonetaria::all();
        }
        public function storeMonetaryDonation($data){
            return DonacionMonetaria::create($data);
        }
        public function findMonetaryDonation($id){
            return DonacionMonetaria::find($id);
        }
        public function updateMonetaryDonation($data, $id){
            $donacionMonetaria = DonacionMonetaria::where('id', $id)->first();
            $donacionMonetaria->fecha_donacion = $data['fecha_donacion'];
            $donacionMonetaria->fecha_recibido = $data['fecha_recibido'];
            $donacionMonetaria->descripcion = $data['descripcion'];
            $donacionMonetaria->monto = $data['monto'];
            $donacionMonetaria->persona_donante_id = $data['persona_donante_id'];
            $donacionMonetaria->save();
        }
        public function destroyMonetaryDonation($id){
            $donacionMonetaria = DonacionMonetaria::findOrFail($id);
            $donacionMonetaria->delete();
        }
    }
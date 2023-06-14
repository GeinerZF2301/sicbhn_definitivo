<?php
    namespace App\Repositories;
    use App\Repositories\Interfaces\TallerRepositorioInterface;
    use App\Models\Taller;

    class TallerRepositorio implements TallerRepositorioInterface {
    
        public function allWorkshops(){
            return Taller::all();
        }
        public function storeWorkshop($data, $estado){
            $taller = new Taller();
            $taller->nombre = $data['nombre'];
            $taller->descripcion = $data['descripcion'];
            $taller->ubicacion = $data['ubicacion'];
            $taller->fecha = $data['fecha'];
            $taller->hora = $data['hora'];
            $taller->tipo_taller = $data['tipo_taller'];
            $taller->cupo = $data['cupo'];
            $taller->estado = $estado;
            $taller->validar_taller = $estado;
            $taller->save();
        }
        public function findWorkshop($id){
            return Taller::findOrFail($id);
        }
        public function updateWorkshop($data, $id){
            $taller = Taller::where('id', $id)->first();
            $taller->nombre = $data['nombre'];
            $taller->descripcion = $data['descripcion'];
            $taller->ubicacion = $data['ubicacion'];
            $taller->fecha = $data['fecha'];
            $taller->hora = $data['hora'];
            $taller->tipo_taller = $data['tipo_taller'];
            $taller->cupo = $data['cupo'];
            $taller->estado = $data['estado'];
            $taller->save();
        }
        public function DecreaseWorkshopQuota($id){
            $contador = 0;
            $tallerExistente = Taller::select()->where('id', $id )->first();
            if($tallerExistente){
                $contador = $tallerExistente->cupo;
                $contador--;
                $tallerExistente->cupo = $contador;
                $this->updateWorkshop($tallerExistente, $id);
            }else{
                return response()->json(404);
            }
        }
        public function IncreaseWorkshopQuota($id){
            $contador = 0;
            $tallerExistente = Taller::select()->where('id', $id )->first();
            if($tallerExistente){
                $contador = $tallerExistente->cupo;
                $contador++;
                $tallerExistente->cupo = $contador;
                $this->updateWorkshop($tallerExistente, $id);
            }else{
                return response()->json(404);
            }
        }
        public function destroyWorkshop($id){
            $taller = Taller::findOrFail($id);
            $taller->delete();
        }
    }
<?php
    namespace App\Repositories;
    use App\Repositories\Interfaces\GaleriaRepositorioInterface;
    use App\Models\Galeria;

    class GaleriaRepositorio implements GaleriaRepositorioInterface {
    
        public function allImages(){
            return Galeria::all();
        }
        public function storeImage($data){
            return Galeria::create($data);
        }
        public function findImage($id){
            return Galeria::findOrFail($id);
        }
        public function updateImage($data, $id){
            $galeria = Galeria::where('id', $id)->first();
            $galeria->nombre = $data['nombre'];
            $galeria->descripcion = $data['descripcion'];
            $galeria->estado = $data['estado'];
            $galeria->path = $data['path'];
            $galeria->file = $data['file'];
            $galeria->categoria_imagen = $data['categoria_imagen'];
            $galeria->save();
        }
        public function destroyImage($id){
            $galeria = Galeria::findOrFail($id);
            $galeria->delete();
        }
    }
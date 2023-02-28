<?php
    namespace App\Repositories;
    use App\Repositories\Interfaces\ArticuloRepositorioInterface;
    use App\Models\Articulo;

    class ArticuloRepositorio implements ArticuloRepositorioInterface {

        public function allArticles(){
            return Articulo::all();
        }
        public function storeArticle($data){
            return Articulo::create($data);
        }
        public function findArticle($id){
            return Articulo::find($id);
        }
        public function updateArticle($data, $id){
            $articulo = Articulo::where('id', $id)->first();
            $articulo->nombre = $data['nombre'];
            $articulo->descripcion = $data['descripcion'];
            $articulo->save();
        }
        public function destroyArticle($id){
            $articulo = Articulo::findOrFail($id);
            $articulo->delete();
        }
    }
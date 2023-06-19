<?php
    namespace App\Repositories;
    use App\Repositories\Interfaces\DocumentoRepositorioInterface;
    use App\Models\Documento;

    class DocumentoRepositorio implements DocumentoRepositorioInterface {
    
        public function allDocuments(){
            return Documento::all();
        }
        public function storeDocument($data){
            return Documento::create($data);
        }
        public function findDocument($id){
            return Documento::findOrFail($id);
        }
        public function updateDocument($data, $id){
            $documento = Documento::where('id', $id)->first();
            $documento->nombre = $data['nombre'];
            $documento->descripcion = $data['descripcion'];
            $documento->estado = $data['estado'];
            $documento->path = $data['path'];
            $documento->file = $data['file'];
            $documento->tipo_documento = isset($data['tipo_documento']) ? $data['tipo_documento'] : 'Privado';
            $documento->save();
        }
        public function destroyDocument($id){
            $documento = Documento::findOrFail($id);
            $documento->delete();
        }
    }
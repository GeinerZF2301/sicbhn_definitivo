<?php
    namespace App\Repositories\Interfaces;
    
     interface DocumentoRepositorioInterface{
        public function allDocuments();
        public function storeDocument($data);
        public function findDocument($id);
        public function updateDocument($data, $id); 
        public function destroyDocument($id);
    }

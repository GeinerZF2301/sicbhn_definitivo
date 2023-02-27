<?php
    namespace App\Repositories\Interfaces;
    
     interface DocumentoRepositorioInterface{
        public function allImages();
        public function storeImage($data, $estado);
        public function findImage($id);
        public function updateImage($data, $id); 
        public function destroyImage($id);
    }

<?php
    namespace App\Repositories\Interfaces;
    
     interface GaleriaRepositorioInterface{
        public function allImages();
        public function storeImage($data);
        public function findImage($id);
        public function updateImage($data, $id); 
        public function destroyImage($id);
    }

<?php
    namespace App\Repositories\Interfaces;
    
     interface TallerRepositorioInterface{
        public function allWorkshops();
        public function storeWorkshop($data, $estado);
        public function findWorkshop($id);
        public function updateWorkshop($data, $id); 
        public function destroyWorkshop($id);
    }

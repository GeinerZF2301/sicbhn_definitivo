<?php
    namespace App\Repositories\Interfaces;
    
     interface VoluntariadoRepositorioInterface{
        public function allVolunteerings();
        public function storeVolunteering($data, $estado);
        public function findVolunteering($id);
        public function updateVolunteering($data, $id); 
        public function destroyVolunteering($id);
    }

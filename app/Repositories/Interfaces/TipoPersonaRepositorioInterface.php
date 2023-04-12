<?php
    namespace App\Repositories\Interfaces;
    
     interface TipoPersonaRepositorioInterface{
        public function allTypesOfPeople();
        public function storePersonType($data);
        public function findPersonType($id);
        public function updatePersonType($data, $id); 
        public function destroyPersonType($id);
    }

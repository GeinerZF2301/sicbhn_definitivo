<?php
    namespace App\Repositories\Interfaces;
    
     interface PersonaRepositorioInterface{
        public function allApprovedPersons();
        public function allPendingPersons();
        public function storePerson($data);
        public function findPerson($id);
        public function updatePerson($data, $id); 
        public function destroyPerson($id);
    }

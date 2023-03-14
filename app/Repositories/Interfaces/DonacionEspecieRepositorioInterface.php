<?php
    namespace App\Repositories\Interfaces;
    
     interface DonacionEspecieRepositorioInterface{
        public function allInKindDonations();
        public function storeInKindDonation($data);
        public function findInKindDonation($id);
        public function updateInKindDonation($data, $id); 
        public function destroyInKindDonation($id);
    }

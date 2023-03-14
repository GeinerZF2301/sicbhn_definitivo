<?php
    namespace App\Repositories\Interfaces;
    
     interface DonacionMonetariaRepositorioInterface{
        public function allMonetaryDonations();
        public function storeMonetaryDonation($data);
        public function findMonetaryDonation($id);
        public function updateMonetaryDonation($data, $id); 
        public function destroyMonetaryDonation($id);
    }

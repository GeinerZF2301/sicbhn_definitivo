<?php
    namespace App\Repositories\Interfaces;
    
     interface CampaĆ±aRepositorioInterface{
        public function allCampaigns();
        public function storeCampaign($data, $estado);
        public function findCampaign($id);
        public function updateCampaign($data, $id); 
        public function destroyCampaign($id);
    }

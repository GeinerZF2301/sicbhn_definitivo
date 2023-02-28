<?php
    namespace App\Repositories\Interfaces;
    
     interface CuentaBancariaRepositorioInterface{
        public function allBankAccounts();
        public function storeArticule($data, $estado);
        public function findBankAccount($id);
        public function updateBankAccount($data, $id); 
        public function destroyBankAccount($id);
    }

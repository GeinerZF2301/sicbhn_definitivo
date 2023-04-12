<?php
    namespace App\Repositories\Interfaces;
    
     interface CuentaBancariaRepositorioInterface{
        public function allBankAccounts();
        public function storeBankAccount($data);
        public function findBankAccount($id);
        public function updateBankAccount($data, $id); 
        public function destroyBankAccount($id);
    }

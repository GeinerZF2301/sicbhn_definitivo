<?php
    namespace App\Repositories;
    use App\Repositories\Interfaces\CuentaBancariaRepositorioInterface;
    use App\Models\CuentaBancaria;

    class CuentaBancariaRepositorio implements CuentaBancariaRepositorioInterface {

        public function allBankAccounts(){
            return CuentaBancaria::all();
        }
        public function storeBankAccount($data){
            return CuentaBancaria::create($data);
        }
        public function findBankAccount($id){
            return CuentaBancaria::find($id);
        }
        public function updateBankAccount($data, $id){
            $cuentaBancaria = CuentaBancaria::where('id', $id)->first();
            $cuentaBancaria->entidad_bancaria = $data['entidad_bancaria'];
            $cuentaBancaria->numero_cuenta = $data['numero_cuenta'];
            $cuentaBancaria->estado = $data['estado'];
            $cuentaBancaria->save();
        }
        public function destroyBankAccount($id){
            $cuentaBancaria = CuentaBancaria::findOrFail($id);
            $cuentaBancaria->delete();
        }
    }
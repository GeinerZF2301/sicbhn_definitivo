<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCuentaBancariaRequest;
use App\Repositories\Interfaces\CuentaBancariaRepositorioInterface;
use App\Repositories\CuentaBancariaRepositorio;
use App\Models\CuentaBancaria;
class CuentaBancariaController extends Controller
{
    private $cuentaBancariaRepositorio;

    public function __construct(CuentaBancariaRepositorioInterface $cuentaBancariaRepositorio){
        $this->cuentaBancariaRepositorio = $cuentaBancariaRepositorio;
    }

    public function index() 
    {
        $articulos = $this->cuentaBancariaRepositorio->allBankAccounts();
        return view('admin.tipopersonas.index', compact('$articulos'));
    }
    public function store(StoreCuentaBancariaRequest $request) 
    {
        try{
            $validatedData = $request->validated();
            $this->cuentaBancariaRepositorio->storeBankAccount($validatedData);
            return response()->json([
                'success' => 'Cuenta Bancaria guardada correctamente'
            ], 201);
        }catch(Exception $exception){
             return response()->json([
                'error' => 'Ocurrio un error' . $exception->getMessage()
             ], 400);
        }
    }

    public function show(Request $request)
    {
        try{
            $id = intval($request->id);
            $persontype = $this->cuentaBancariaRepositorio->findBankAccount($id);
            return response()->json($persontype);
        }catch(Exception $e){
            return response()->json([
                'error' => 'Ha ocurrido un error' . $e->getMessage()
            ], 404);
        }
    }
    public function edit(Request $request){
        try{
            $id = intval($request->id);
            $persontype = $this->cuentaBancariaRepositorio->findBankAccount($id);
            return response()->json($persontype);
        }catch(Exception $e){
            return response()->json([
                'error' => 'Ha ocurrido un error' . $e->getMessage()
            ], 404);
        }
    }

    public function update(StoreCuentaBancariaRequest $request)
    {
        try{
            $id = intval($request->id);
            $validatedData = $request->validated();
            $tipo_persona = $this->cuentaBancariaRepositorio->updateBankAccount($validatedData, $id);
            return response()->json([
                'success' => 'Registro Actualizado Correctamente'
            ], 200); 
              
        } catch(Exception $e){
            return response()->json([
                'error' => 'Ha ocurrido un error:'. $e->getMessage()
            ], 400);
        }
    }
    public function delete(int $id)
    {
        $intId = intval($id);
        $this->cuentaBancariaRepositorio->destroyBankAccount($intId);
        return response()->json([
            'success' => 'CuentaBancaria eliminada correctamente'
        ], 200);
    }
}

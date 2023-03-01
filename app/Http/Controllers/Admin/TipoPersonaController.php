<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTipoPersonaRequest;
use App\Repositories\Interfaces\TipoPersonaRepositorioInterface;
use App\Repositories\TipoPersonaRepositorio;
use App\Models\TipoPersona;
class TipoPersonaController extends Controller
{
    private $tipoPersonaRepositorio;

    
    public function __construct(TipoPersonaRepositorioInterface $tipoPersonaRepositorio){
        $this->tipoPersonaRepositorio = $tipoPersonaRepositorio;

        $this->middleware('permission:ver-TipoPersona|crear-TipoPersona|editar-TipoPersona|borrar-TipoPersona',['only' => ['index']]);
        $this->middleware('permission:crear-TipoPersona' , ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-TipoPersona' , ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-TipoPersona' , ['only' => ['delete', 'destroy']]);
    }

    
    
    public function index() 
    {
        $tipo_personas = $this->tipoPersonaRepositorio->allTypesOfPeople();
        return view('admin.tipopersonas.index', compact('tipo_personas'));
    }
    public function store(StoreTipoPersonaRequest $request) 
    {
        try{
            $validatedData = $request->validated();
            $this->tipoPersonaRepositorio->storePersonType($validatedData);
            return response()->json([
                'success' => 'Tipo de persona guardada correctamente'
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
            $persontype = $this->tipoPersonaRepositorio->findPersonType($id);
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
            $persontype = $this->tipoPersonaRepositorio->findPersonType($id);
            return response()->json($persontype);
        }catch(Exception $e){
            return response()->json([
                'error' => 'Ha ocurrido un error' . $e->getMessage()
            ], 404);
        }
    }

    public function update(StoreTipoPersonaRequest $request)
    {
        try{
            $id = intval($request->id);
            $validatedData = $request->validated();
            $tipo_persona = $this->tipoPersonaRepositorio->updatePersonType($validatedData, $id);
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
        $this->tipoPersonaRepositorio->destroyPersonType($intId);
        return response()->json([
            'success' => 'Tipo de persona eliminada correctamente'
        ], 200);
    }
}

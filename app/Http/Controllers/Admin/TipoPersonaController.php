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
    private $tipo_persona_repositorio;

    public function __construct(TipoPersonaRepositorioInterface $tipo_persona_repositorio){
        $this->tipo_persona_repositorio = $tipo_persona_repositorio;
    }

    public function index() 
    {
        $tipo_personas = $this->tipo_persona_repositorio->allTypesOfPeople();
        return view('admin.tipopersonas.index', compact('tipo_personas'));
    }

    public function create() 
    {
        return view('admin.tipopersonas.createOrEdit');
    }

    public function store(StoreTipoPersonaRequest $request) 
    {
        $validated_data = $request->validated();
        $this->tipo_persona_repositorio->storePersonType($validated_data);

        return response()->json([
            'success' => 'Tipo de persona guardada correctamente'
        ], 201);
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

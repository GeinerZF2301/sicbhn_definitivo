<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVoluntariadoRequest;
use App\Repositories\Interfaces\VoluntariadoRepositorioInterface;
use App\Repositories\VoluntariadoRepositorio;
use App\Models\Voluntariado;
class VoluntariadoController extends Controller
{
    private $voluntariadoRepositorio;

    public function __construct(VoluntariadoRepositorioInterface $voluntariadoRepositorio){
        $this->voluntariadoRepositorio = $voluntariadoRepositorio;

        $this->middleware('permission:ver-Voluntarios|crear-Voluntarios|editar-Voluntarios|borrar-Voluntarios',['only' => ['index']]);
        $this->middleware('permission:crear-Voluntarios' , ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-Voluntarios' , ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-Voluntarios' , ['only' => ['delete', 'destroy']]);
    }

    public function index()
    {
        $voluntariados = $this->voluntariadoRepositorio->allVolunteerings();
        return view('admin.voluntariados.index', compact('voluntariados'));
    }

    public function store(StoreVoluntariadoRequest $request){
        $validacionFechaVoluntariado = $this->validarVoluntariado($request);
        if($validacionFechaVoluntariado->getStatusCode() === 200){
            $validatedData = $request->validated();
            $estadoVoluntariado = (boolean) $validatedData['estado'];
            $this->voluntariadoRepositorio->storeVolunteering($validatedData, $estadoVoluntariado);
            return response()->json([
                'success' => 'Voluntariado guardado correctamente'
            ], 201);
        }
        return response()->json([
            'error' => 'El voluntariado no puede ser creado porque ya existe un voluntariado en la fecha y hora seleccionada.'
        ], 400);
    }
    public function show(Request $request)
    {
        try{
            $id = intval($request->id);
            $voluntariado = $this->voluntariadoRepositorio->findVolunteering($id);
            return response()->json($voluntariado);
        }catch(Exception $e){
            return response()->json([
                'error' => 'Ha ocurrido un error' . $e->getMessage()
            ], 404);
        }
    }
    public function edit(Request $request)
    {
        try{
            $id = intval($request->id);
            $voluntariado = $this->voluntariadoRepositorio->findVolunteering($id);
            return response()->json($voluntariado);
        }catch(Exception $e){
            return response()->json([
                'error' => 'Ha ocurrido un error' . $e->getMessage()
            ], 404);
        }
    }
    public function update(StoreVoluntariadoRequest $request, $method)
    {
        $estadoAuxiliar = true;
        $id = intval($request->id);
        try{
            $validacionFechaVoluntariado = $this->validarVoluntariado($request);
            if($validacionFechaVoluntariado->getStatusCode() === 200){
                $validatedData = $request->validated();
                $estadoVoluntariado = (boolean) $validatedData['estado'];
                $estadoAuxiliar = $estadoVoluntariado;
                $validatedData['estado'] = $estadoAuxiliar;
                $this->voluntariadoRepositorio->updateVolunteering($validatedData, $id);
                return response()->json([
                    'success' => 'Voluntariado actualizado correctamente'
                ], 201);
            }
            else{
                return response()->json([
                    'error' => 'El voluntariado no puede ser actualizado porque ya existe un voluntariado en la fecha y hora seleccionada.'
                ], 409);
            }
        }catch(Exception $exception){

            return response()->json([
               'fatalError' => 'Ha ocurrido un error' . $exception->getMessage()
            ],400);
        }
    }
    public function delete($id)
    {
        $intId = intval($id);
        $this->voluntariadoRepositorio->destroyVolunteering($intId);
        return response()->json([
            'success' => 'Voluntariado eliminado correctamente'
        ], 200);
    }

    public function validarVoluntariado(Request $request)
    {
        $fecha = $request->fecha;
        $hora = $request->hora;
        $id = $request->id; 
        $voluntariadoExistente = Voluntariado::where('fecha', $fecha)->where('hora', $hora)->first();
        if ($voluntariadoExistente && $voluntariadoExistente->id != $id) { // Agregamos la verificación de id
            return response()->json([
                'error' => 'Ya existe una voluntariado en esa fecha y hora indicada'
            ], 422);
        }
        return response()->json([
            'success' => 'Fecha y hora disponible para creación o actualización'
        ], 200);
    }
    
}

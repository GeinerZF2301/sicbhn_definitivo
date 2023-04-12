<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCampañaRequest;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\CampañaRepositorioInterface;
use App\Repositories\CampañaRepositorio;
use App\Models\Campaña;
class CampañaController extends Controller
{
    private $campañaRepositorio;

    public function __construct(CampañaRepositorioInterface $campañaRepositorio){
        $this->campañaRepositorio = $campañaRepositorio;

         $this->middleware('permission:ver-Campañas|crear-Campañas|editar-Campañas|borrar-Campañas',['only' => ['index']]);
        $this->middleware('permission:crear-Campañas' , ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-Campañas' , ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-Campañas' , ['only' => ['delete', 'destroy']]);
    }

    public function index()
    {
        $campañas = $this->campañaRepositorio->allCampaigns();
        return view('admin.campañas.index', compact('campañas'));
    }

    public function store(StoreCampañaRequest $request) {
        $validacionFechaCampaña = $this->validarCampaña($request);
        if($validacionFechaCampaña->getStatusCode() === 200){
            $validatedData = $request->validated();
            $estadoCampaña = (boolean) $validatedData['estado'];
            $this->campañaRepositorio->storeCampaign($validatedData, $estadoCampaña);
            return response()->json([
                'success' => 'Campaña guardada correctamente'
            ], 201);
        }
        return response()->json([
            'error' => 'La campaña no puede ser creada porque ya existe una campaña en la fecha y hora seleccionada.'
        ], 400);
    }
    public function show(Request $request)
    {
        try{
            $id = intval($request->id);
            $campaña = $this->campañaRepositorio->findCampaign($id);
            return response()->json($campaña);
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
            $campaña = $this->campañaRepositorio->findCampaign($id);
            return response()->json($campaña);
        }catch(Exception $e){
            return response()->json([
                'error' => 'Ha ocurrido un error' . $e->getMessage()
            ], 404);
        }
    }
    public function update(StoreCampañaRequest $request, $method)
    {
        $estadoAuxiliar = true;
        $id = intval($request->id);
        try{
            $validacionFechaCampaña = $this->validarCampaña($request);
            if($validacionFechaCampaña->getStatusCode() === 200){
                $validatedData = $request->validated();
                $estadoCampaña = (boolean) $validatedData['estado'];
                $estadoAuxiliar = $estadoCampaña;
                $validatedData['estado'] = $estadoAuxiliar;
                $this->campañaRepositorio->updateCampaign($validatedData, $id);
                return response()->json([
                    'success' => 'Campaña actualizada correctamente'
                ], 201);
            }
            else{
                return response()->json([
                    'error' => 'La campaña no puede ser editada porque ya existe una campaña en la fecha y hora seleccionada.'
                ], 409);
            }
        }catch(Exception $exception){

            return response()->json([
               'errorDesconocido' => 'Ha ocurrido un error' . $exception->getMessage()
            ],400);
        }
    }
    public function delete($id)
    {
        $intId = intval($id);
        $this->campañaRepositorio->destroyCampaign($intId);
        return response()->json([
            'success' => 'Campaña eliminada correctamente'
        ], 200);
    }

    public function validarCampaña(Request $request)
    {
        $fecha = $request->fecha;
        $hora = $request->hora;
        $id = $request->id; 
        
        $campañaExistente = Campaña::where('fecha', $fecha)->where('hora', $hora)->first();
        
        if ($campañaExistente && $campañaExistente->id != $id) { // Agregamos la verificación de id
            return response()->json([
                'error' => 'Ya existe una campaña en esa fecha y hora indicada'
            ], 422);
        }
        // Si no se encontró una campaña existente, devuelve el código de respuesta 200
        return response()->json([
            'success' => 'Fecha y hora disponible para creación o actualización'
        ], 200);
    }

}
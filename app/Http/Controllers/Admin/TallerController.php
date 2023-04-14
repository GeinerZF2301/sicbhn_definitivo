<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTallerRequest;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\TallerRepositorioInterface;
use App\Repositories\TallerRepositorio;
use App\Models\Taller;
class TallerController extends Controller
{
    private $tallerRepositorio;

    public function __construct(TallerRepositorioInterface $tallerRepositorio){
        $this->tallerRepositorio = $tallerRepositorio;

        //      $this->middleware('permission:ver-Campañas|crear-Campañas|editar-Campañas|borrar-Campañas',['only' => ['index']]);
        //     $this->middleware('permission:crear-Campañas' , ['only' => ['create', 'store']]);
        //     $this->middleware('permission:editar-Campañas' , ['only' => ['edit', 'update']]);
        //     $this->middleware('permission:borrar-Campañas' , ['only' => ['delete', 'destroy']]);
    }
    public function index()
    {
        $talleres = $this->tallerRepositorio->allWorkshops();
        return view('admin.talleres.index', compact('talleres'));
    }

    public function store(StoreTallerRequest $request) {
        $validacionFechaTaller = $this->validarTaller($request);
        if($validacionFechaTaller->getStatusCode() === 200){
            $validatedData = $request->validated();
            $estadoTaller = (boolean) $validatedData['estado'];
            $this->tallerRepositorio->storeWorkshop($validatedData, $estadoTaller);
            return response()->json([
                'success' => 'Taller guardado correctamente'
            ], 201);
        }
        return response()->json([
            'error' => 'El taller no puede ser creada porque ya existe una campaña en la fecha y hora seleccionada.'
        ], 400);
    }
    public function show(Request $request)
    {
        try{
            $id = intval($request->id);
            $taller = $this->tallerRepositorio->findWorkshop($id);
            return response()->json($taller);
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
            $taller = $this->tallerRepositorio->findWorkshop($id);
            return response()->json($taller);
        }catch(Exception $e){
            return response()->json([
                'error' => 'Ha ocurrido un error' . $e->getMessage()
            ], 404);
        }
    }
    public function update(StoreTallerRequest $request, $method)
    {
        $estadoAuxiliar = true;
        $id = intval($request->id);
        try{
            $validacionFechaTaller = $this->validarTaller($request);
            if($validacionFechaTaller->getStatusCode() === 200){
                $validatedData = $request->validated();
                $estadoCampaña = (boolean) $validatedData['estado'];
                $estadoAuxiliar = $estadoCampaña;
                $validatedData['estado'] = $estadoAuxiliar;
                $this->tallerRepositorio->updateWorkshop($validatedData, $id);
                return response()->json([
                    'success' => 'Taller actualizado correctamente'
                ], 201);
            }
            else{
                return response()->json([
                    'error' => 'El taller no puede ser editado porque ya existe una campaña en la fecha y hora seleccionada.'
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
        $this->tallerRepositorio->destroyWorkshop($intId);
        return response()->json([
            'success' => 'Taller eliminado correctamente'
        ], 200);
    }

    public function validarTaller(Request $request)
    {
        $fecha = $request->fecha;
        $hora = $request->hora;
        $id = $request->id; 
        
        $tallerExistente = Taller::where('fecha', $fecha)->where('hora', $hora)->first();
        
        if ($tallerExistente && $tallerExistente->id != $id) { // Agregamos la verificación de id
            return response()->json([
                'error' => 'Ya existe un taller en esa fecha y hora indicada'
            ], 422);
        }
        // Si no se encontró una campaña existente, devuelve el código de respuesta 200
        return response()->json([
            'success' => 'Fecha y hora disponible para creación o actualización'
        ], 200);
    }

}
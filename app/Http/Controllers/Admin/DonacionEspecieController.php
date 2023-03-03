<?php
namespace App\Http\Controllers\Admin;

use App\Models\DonacionEspecie;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDonacionEspecieRequest;
use App\Repositories\Interfaces\DonacionEspecieRepositorioInterface;
use App\Repositories\DonacionEspecieRepositorio;

class DonacionEspecieController extends Controller
{
    private $donacionEspecie;
    /*Constructor encargado de inicializar y desacoplar la logica de negocio con con la
    capa de acceso a datos*/
    public function __construct(DonacionEspecieRepositorioInterface $donacionEspecie){
        $this->donacionEspecie = $donacionEspecie;
        $this->middleware('permission:ver-DonacionEspecies|crear-DonacionEspecies|editar-DonacionEspecies|borrar-DonacionEspecies',['only' => ['index']]);
        $this->middleware('permission:crear-DonacionEspecies' , ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-DonacionEspecies' , ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-DonacionEspecies' , ['only' => ['delete', 'destroy']]);
    
    }

    public function index() 
    {
        $donaciones = $this->donacionEspecie->allInKindDonations();
        return view('admin.donacionEspecies.index', compact('donaciones'));
    }

    public function create() 
    {
        try{
            $personasDonantes =  DB::table('personas as p')->select('p.id', 'p.nombre', 'p.apellidos', 
            'tp.id as tipo_persona_id', 'tp.tipo_persona')
            ->join('tipos_personas as tp', 'p.tipo_persona_id', '=', 'tp.id')
            ->where(function ($query) {
                $query->where('tp.tipo_persona', '=', 'Donante')
                ->orWhere('tp.tipo_persona', '=', 'donante');
            })->get();

            $articulos = DB::table('articulos')->select('id', 'nombre')->get();

            return response()->json($personasDonantes,$articulos, 200);

        }catch(Exception $e){
            return response()->json([
                'error' => 'Ha ocurrido un error:'. $e->getMessage()
            ], 400);
        }
    }

    public function store(StoreDonacionEspecieRequest $request) 
    {
        try{
            $validatedData = $request->validated();
            $this->donacionEspecie->storeInKindDonation($validatedData);
            return response()->json([
                'success' => 'Donacion en Especie guardada correctamente'
            ], 201);
        }catch(Exception $e){
            return response()->json([
                'error' => 'Ha ocurrido un error' . $e->getMessage()
            ], 400);
        }
    }

    public function show(Request $request) 
    {
        try{
            $id = intval($request->id);
            $donacion = $this->donacionEspecie->findInKindDonation($id);
            return response()->json($donacion);
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
            $donacion = $this->donacionEspecie->findInKindDonation($id);
            return response()->json($donacion);
        }catch(Exception $e){
            return response()->json([
                'error' => 'Ha ocurrido un error' . $e->getMessage()
            ], 404);
        }
    }

    public function update(StoreDonacionEspecieRequest $request) 
    {
        try{
            $id = intval($request->id);
            $validatedData = $request->validated();
            $donacion = $this->donacionEspecie->updateInKindDonation($validatedData, $id);
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
        $this->donacionEspecie->destroyInKindDonation($intId);
        return response()->json([
            'success' => 'Registro de donacion eliminada correctamente'
        ], 200);
    }
}

<?php
namespace App\Http\Controllers\Admin;

use App\Models\DonacionMonetaria;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDonacionMonetariaRequest;
use App\Repositories\Interfaces\DonacionMonetariaRepositorioInterface;
use App\Repositories\DonacionMonetariaRepositorio;

class DonacionMonetariaController extends Controller
{
    private $donacionMonetaria;
    /*Constructor encargado de inicializar y desacoplar la logica de negocio con con la
    capa de acceso a datos*/
    public function __construct(DonacionMonetariaRepositorioInterface $donacionMonetaria){
        $this->donacionMonetaria = $donacionMonetaria;
        $this->middleware('permission:ver-DonacionMonetarias|crear-DonacionMonetarias|editar-DonacionMonetarias|borrar-DonacionMonetarias',['only' => ['index']]);
        $this->middleware('permission:crear-DonacionMonetarias' , ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-DonacionMonetarias' , ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-DonacionMonetarias' , ['only' => ['delete', 'destroy']]);
    }
   
    public function index() 
    {
        $donaciones = $this->donacionMonetaria->allMonetaryDonations();
        return view('admin.donacionMonetaria.index', compact('donaciones'));
    }

    public function create() 
    {
        try{
            $personasDonantes =  DB::table('personas as p')->select('p.id', 'p.nombre', 'p.apellidos', 
            'tp.id as tipo_persona_id', 'tp.tipo_persona')
            ->join('tipo_personas as tp', 'p.tipo_persona_id', '=', 'tp.id')
            ->where(function ($query) {
                $query->where('tp.tipo_persona', '=', 'Donante')
                ->orWhere('tp.tipo_persona', '=', 'donante');
            })->get();
            return response()->json($personasDonantes, 200);
        }catch(Exception $e){
            return response()->json([
                'error' => 'Ha ocurrido un error:'. $e->getMessage()
            ], 400);
        }
    }

    public function store(StoreDonacionMonetariaRequest $request) 
    {
        try{
            $validatedData = $request->validated();
            $this->donacionMonetaria->storeMonetaryDonation($validatedData);
            return response()->json([
                'success' => 'DonacionMonetaria guardada correctamente'
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
            $donacion = $this->donacionMonetaria->findMonetaryDonation($id);
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
            $donacion = $this->donacionMonetaria->findMonetaryDonation($id);
            return response()->json($donacion);
        }catch(Exception $e){
            return response()->json([
                'error' => 'Ha ocurrido un error' . $e->getMessage()
            ], 404);
        }
    }

    public function update(StoreDonacionMonetariaRequest $request) 
    {
        try{
            $id = intval($request->id);
            $validatedData = $request->validated();
            $donacion = $this->donacionMonetaria->updateMonetaryDonation($validatedData, $id);
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
        $this->donacionMonetaria->destroyMonetaryDonation($intId);
        return response()->json([
            'success' => 'Registro de donacion eliminada correctamente'
        ], 200);
    }
}

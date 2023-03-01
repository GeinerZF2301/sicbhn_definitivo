<?php
namespace App\Http\Controllers\Admin;

use App\Models\Persona;
use App\Models\TipoPersona;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StorePersonaRequest;
use App\Repositories\Interfaces\PersonaRepositorioInterface;
use App\Repositories\PersonaRepositorio;

class PersonaController extends Controller
{
    private $personaRepositorio;
    /*Constructor encargado de inicializar y desacoplar la logica de negocio con con la
    capa de acceso a datos*/
    public function __construct(PersonaRepositorioInterface $personaRepositorio){
        $this->personaRepositorio = $personaRepositorio;

        $this->middleware('permission:ver-Persona|crear-Persona|editar-Persona|borrar-Persona',['only' => ['index']]);
        $this->middleware('permission:crear-Persona' , ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-Persona' , ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-Persona' , ['only' => ['delete', 'destroy']]);
    }
   
    public function index() 
    {
        $personas = $this->personaRepositorio->allPeople();
        return view('admin.personas.index', compact('personas'));
    }

    public function create() 
    {
        try{
            $tipoPersona = DB::table('tipo_personas')->select('id','tipo_persona')->get();
            return response()->json($tipoPersona, 200);
        }catch(Exception $e){
            return response()->json([
                'error' => 'Ha ocurrido un error:'. $e->getMessage()
            ], 400);
        }
    }

    public function store(StorePersonaRequest $request) 
    {
        try{
            $validatedData = $request->validated();
            $this->personaRepositorio->storePerson($validatedData);
            return response()->json([
                'success' => 'Persona guardada correctamente'
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
            $persona = $this->personaRepositorio->findPerson($id);
            return response()->json($persona);
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
            $persona = $this->personaRepositorio->findPerson($id);
            return response()->json($persona);
        }catch(Exception $e){
            return response()->json([
                'error' => 'Ha ocurrido un error' . $e->getMessage()
            ], 404);
        }
    }

    public function update(StorePersonaRequest $request) 
    {
        try{
            $id = intval($request->id);
            $validatedData = $request->validated();
            $persona = $this->personaRepositorio->updatePerson($validatedData, $id);
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
        $this->personaRepositorio->destroyPerson($intId);
        return response()->json([
            'success' => 'Registro de persona eliminada correctamente'
        ], 200);
    }
}

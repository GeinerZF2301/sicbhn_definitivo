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
use App\Repositories\Interfaces\TallerRepositorioInterface;
use App\Repositories\TallerRepositorio;

class PersonaController extends Controller
{
    private $personaRepositorio;
    /*Constructor encargado de inicializar y desacoplar la logica de negocio con con la
    capa de acceso a datos*/
    public function __construct(PersonaRepositorioInterface $personaRepositorio, TallerRepositorioInterface $tallerRepositorio){
        $this->personaRepositorio = $personaRepositorio;
        $this->tallerRepositorio = $tallerRepositorio;
        $this->middleware('permission:ver-Persona/Solicitudes|crear-Persona|editar-Persona|borrar-Persona',['only' => ['index']]);
        $this->middleware('permission:crear-Persona' , ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-Persona' , ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-Persona' , ['only' => ['delete', 'destroy']]);
    }
   
    public function index() 
    {
        $personas = $this->personaRepositorio->allApprovedPersons();
        return view('admin.personas.index', compact('personas'));
    }

    public function PendingRequestsVolunteer() 
    {
        //$personasPendientes = $this->personaRepositorio->allPendingPersons();
        $personasPendientes = $this->QueryRequestVolunteer();
        return view('admin.solicitudes.indexVoluntariosPendientes', compact('personasPendientes'));
    }
    public function PendingRequestsfromWorkshopParticipants() 
    {
        //$personasPendientes = $this->personaRepositorio->allPendingPersons();
        $participantesPendientes = $this->PendingParticipantInquiry();
        return view('admin.solicitudes.indexParticipantesPendientes', compact('participantesPendientes'));
    }

    //Funcion para obtener todas las solcitudes de voluntarios rechazados y aprobados
    public function VolunteerRejectedandApproved() 
    {
        $historialVoluntarios= $this->personaRepositorio->allRejectedandApprovedVolunteers();
        return view('admin.historialSolicitudes.voluntarios.index', compact('historialVoluntarios'));
    }
    public function WorkshopParticipantsRejectedandApproved() 
    {
        $historialParticipantes = $this->personaRepositorio->allRejectedandApprovedParticipants();
        return view('admin.historialSolicitudes.participantes.index', compact('historialParticipantes'));
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
    public function updateApprovedStatus(Request $request){
        $estado = 'Aprobado';
        $id = intval($request->id);
        $persona = $this->personaRepositorio->findPerson($id);
        $persona->estado = $estado;
        $personaStatus = $this->personaRepositorio->updatePerson($persona, $id);
        return response()->json([
            'success' => 'Solicitud aprobada satisfactoriamente'
        ], 200);
    }
    public function updateRejectStatus(Request $request){
        try{
            $estado = 'Rechazado';
            $id = intval($request->id);
            $tallerId = intval($request->tallerId);
            $persona = $this->personaRepositorio->findPerson($id);
            $persona->estado = $estado;
            $personaStatus = $this->personaRepositorio->updatePerson($persona, $id);
            if($tallerId){
                $taller = $this->tallerRepositorio->IncreaseWorkshopQuota($tallerId);
            }
            return response()->json([
                'success' => 'Solicitud rechazada de manera exitosa'
            ], 200);
        }catch(Exception $e){
            return response()->json([
                'error' => 'Ha ocurrido un error: ' . $e->getMessage()
            ], 400);
        }
        
    }
    public function QueryRequestVolunteer(){
        $resultados = DB::table('personas_voluntariados')->join('personas', 'personas_voluntariados.persona_id', '=', 'personas.id')
        ->join('voluntariados', 'personas_voluntariados.voluntariado_id', '=', 'voluntariados.id') 
        ->join('tipo_personas', 'personas.tipo_persona_id', '=', 'tipo_personas.id')
        ->select('personas.id', 'personas.nombre', 'personas.apellidos', 'personas.estado', 'voluntariados.id as voluntariado_id',
         'voluntariados.nombre as voluntariado_nombre')->where('personas.estado', 'Pendiente')
        ->where('tipo_personas.tipo_persona', 'Voluntario')->orWhere('tipo_personas.tipo_persona', 'voluntario')
        ->where('voluntariados.estado', 'activo')->get();
        
        return $resultados;
    }
    public function PendingParticipantInquiry(){
        $resultados = DB::table('personas_talleres')->join('personas', 'personas_talleres.persona_id', '=', 'personas.id')
        ->join('tallers', 'personas_talleres.taller_id', '=', 'tallers.id') 
        ->join('tipo_personas', 'personas.tipo_persona_id', '=', 'tipo_personas.id')
        ->select('personas.id', 'personas.nombre', 'personas.apellidos', 'personas.estado', 'tallers.id as taller_id',
         'tallers.nombre as taller_nombre')->where('personas.estado', 'Pendiente')
        ->where('tipo_personas.tipo_persona', 'Participante de Taller')->orWhere('tipo_personas.tipo_persona', 'participante de taller')
        ->where('tallers.estado', 'activo')->get();
        return $resultados;
    }
}

   
<?php

namespace App\Http\Controllers\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Taller;
use App\Models\TipoPersona;
use App\Models\Persona;
use App\Http\Requests\StoreTallerPersonaRequest;
use App\Repositories\Interfaces\PersonaRepositorioInterface;
use App\Repositories\PersonaRepositorio;
use App\Repositories\Interfaces\TallerRepositorioInterface;
use App\Repositories\TallerRepositorio;
use Illuminate\Support\Facades\DB;

class TallerClienteController extends Controller
{
    private $personaRepositorio;
    private $tallerRepositorio;
    /*Constructor encargado de inicializar y desacoplar la logica de negocio con con la
    capa de acceso a datos*/
    public function __construct(PersonaRepositorioInterface $personaRepositorio, TallerRepositorioInterface $tallerRepositorio){
        $this->personaRepositorio = $personaRepositorio;
        $this->tallerRepositorio = $tallerRepositorio;
    }
    public function index(){
        $sectionId = 'seccion-formulario';
        $tipoParticipante = TipoPersona::select('id')->where('tipo_persona', 'Participante de Taller')->orWhere('tipo_persona', 'participante de taller')->first();
        $talleres = Taller::select('id','nombre', 'descripcion','ubicacion','fecha','hora', 'cupo','tipo_taller')->
        where('estado', 1)->get();
        $cantidadTalleres = Taller::count();
        return view('principal.taller.taller-index', compact('talleres', 'tipoParticipante', 'sectionId', 'cantidadTalleres'));
    }

    public function storeRequest(StoreTallerPersonaRequest  $request){
        $contador = 0;
        $contadorAux = 0;
        $taller = $request->taller_id;
        $tallerExistente = Taller::all()->where('id', $taller )->get();

            if($tallerExistente){
                $contador = $tallerExistente->cupo;
                $contador--;
                $contadorAux = $contador;
                $tallerExistente->cupo = $contadorAux;
                $this->tallerRepositorio->updateWorkshop($tallerExistente, $taller);
            }
        
        try{
            $estado = 'Pendiente';
            $validatedData = $request->validated();
            $validatedData['estado'] = $estado;
            $personaParticipanteTaller = $this->personaRepositorio->storePerson($validatedData);
            $personaVoluntario->talleres()->attach($taller);
            return response()->json([
                'success' => '¡Solicitud enviada correctamente!'
                 
            ], 201);
        }catch(Exception $e){
            return response()->json([
                'error' => 'Ha ocurrido un error' . $e->getMessage()
            ], 400);
        }
    }

    
}

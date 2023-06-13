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
        where('estado', 1)->where('cupo', '>', 0)->get();
        $cantidadTalleres = Taller::where('estado', '=', '1')->where('cupo', '>', 0)->count();
        return view('principal.taller.taller-index', compact('talleres', 'tipoParticipante', 'sectionId', 'cantidadTalleres'));
    }

    public function storeRequest(StoreTallerPersonaRequest $request){
        try {
            $validatedData = $request->validated();
            $tallerId = $request->taller_id;
            $personaParticipanteTaller = $this->personaRepositorio->storePerson($validatedData);
            $personaParticipanteTaller->talleres()->attach($tallerId, ['created_at' => now(), 'updated_at' => now()]);
            $this->tallerRepositorio->DecreaseWorkshopQuota($tallerId);
            return response()->json([
                'success' => '¡Solicitud enviada correctamente!'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Ha ocurrido un error: ' . $e->getMessage()
            ], 400);
        }
    }
}

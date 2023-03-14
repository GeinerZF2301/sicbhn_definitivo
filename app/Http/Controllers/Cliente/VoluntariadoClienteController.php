<?php

namespace App\Http\Controllers\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Voluntariado;
use App\Models\TipoPersona;
use App\Models\Persona;
use App\Http\Requests\StorePersonaSolicitudRequest;
use App\Repositories\Interfaces\PersonaRepositorioInterface;
use App\Repositories\PersonaRepositorio;
use Illuminate\Support\Facades\DB;

class VoluntariadoClienteController extends Controller
{
    private $personaRepositorio;
    /*Constructor encargado de inicializar y desacoplar la logica de negocio con con la
    capa de acceso a datos*/
    public function __construct(PersonaRepositorioInterface $personaRepositorio){
        $this->personaRepositorio = $personaRepositorio;
    }
    public function index(){
        $sectionId = 'seccion-formulario';
        $tipoVoluntario = TipoPersona::select('id')->where('tipo_persona', 'Voluntario')->orWhere('tipo_persona', 'voluntario')->first();
        $voluntariadosDisponibles = Voluntariado::select('id','nombre', 'descripcion','ubicacion','fecha','hora','tipo_voluntariado')->
        where('estado', 1)->get();
        return view('principal.voluntariado.voluntariado-index', compact('voluntariadosDisponibles', 'tipoVoluntario', 'sectionId'));
    }

    public function storeRequest(StorePersonaSolicitudRequest $request){
        $voluntariado = $request->voluntariado_id;
        try{
            $estado = 'Pendiente';
            $validatedData = $request->validated();
            $validatedData['estado'] = $estado;
            $personaVoluntario = $this->personaRepositorio->storePerson($validatedData);
            $personaVoluntario->voluntariados()->attach($voluntariado);
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

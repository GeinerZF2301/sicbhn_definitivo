<?php

namespace App\Http\Controllers\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Voluntariado;
use App\Models\Persona;
use App\Http\Requests\StorePersonaSolicitudRequest;
use App\Repositories\Interfaces\PersonaRepositorioInterface;
use App\Repositories\PersonaRepositorio;

class VoluntariadoClienteController extends Controller
{
    private $personaRepositorio;
    /*Constructor encargado de inicializar y desacoplar la logica de negocio con con la
    capa de acceso a datos*/
    public function __construct(PersonaRepositorioInterface $personaRepositorio){
        $this->personaRepositorio = $personaRepositorio;
    }
    public function index(){
        $voluntariadosDisponibles = Voluntariado::select('nombre', 'descripcion','ubicacion','fecha','hora','tipo_voluntariado')->
        where('estado', 1)->get();
        return view('principal.voluntariado.voluntariado-index', compact('voluntariadosDisponibles'));
    }

    public function storeSolicitudPersona(StorePersonaSolicitudRequest $request){
        try{
            $validatedData = $request->validated();
            $this->personaRepositorio->storePerson($validatedData);
            return response()->json([
                'success' => 'Solicitud enviada correctamente'
            ], 201);
        }catch(Exception $e){
            return response()->json([
                'error' => 'Ha ocurrido un error' . $e->getMessage()
            ], 400);
        }
    }
}

<?php
namespace App\Http\Controllers\Admin;

use App\Models\Persona;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Request\StorePersonaRequest;
use App\Repositories\Interfaces\PersonaRepositorioInterface;
use App\Repositories\PersonaRepositorio;

class PersonaController extends Controller
{
    private $persona_repositorio;

    /*Constructor encargado de inicializar y desacoplar la logica de negocio con con la
    capa de acceso a datos*/
    public function __construct(PersonaRepositorioInterface $persona_repositorio){
        $this->persona_repositorio = $persona_repositorio;
    }
   
    public function index() 
    {
        $personas = $this->persona_repositorio->allPeople();
        //return view('admin.personas.index', compact('personas'));
        return $personas;
    }

    public function create() 
    {
        return view('admin.personas.create');
    }

    public function store(StorePersonaRequest $request) 
    {
        $validated_data = $request->validate();
        $this->persona_repositorio->storePerson($validated_data);
        return redirect()->route('personas.index')->with('message', 'OK');
    }

    public function show(int $id) : Renderable
    {
        $persona = $this->persona_repositorio->findPerson($id);
        return view('admin.personas.show', compact('persona'));
    }

    public function edit(int $id) : Renderable
    {
        $persona = $this->persona_repositorio->findPerson($id);
        return view('admin.personas.edit', compact('persona'));
    }

    public function update(Persona $persona, StorePersonaRequest $request ) : RedirectResponse
    {
        $request->validate();
        $this->persona_repositorio->updatePerson($request->all(), $id);
        return redirect->route('personas.index')->with('message', 'Persona Actualizada');
    }

    public function destroy($id) 
    {
        $this->persona_repositorio->destroyPerson($id);
        //return redirect->route('personas.index')->with('message', 'Persona Eliminada');
        return 'Persona Eliminada';
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticuloRequest;
use App\Repositories\Interfaces\ArticuloRepositorioInterface;
use App\Repositories\ArticuloRepositorio;
use App\Models\Articulo;
class ArticuloController extends Controller
{
    private $articuloRepositorio;

    public function __construct(ArticuloRepositorioInterface $articuloRepositorio){
        $this->articuloRepositorio = $articuloRepositorio;
    }

    public function index() 
    {
        $articulos = $this->articuloRepositorio->allArticles();
        return view('admin.articulos.index', compact('articulos'));
    }
    public function store(StoreArticuloRequest $request) 
    {
        try{
            $validatedData = $request->validated();
            $this->articuloRepositorio->storeArticle($validatedData);
            return response()->json([
                'success' => 'Articulo guardada correctamente'
            ], 201);
        }catch(Exception $exception){
             return response()->json([
                'error' => 'Ocurrio un error' . $exception->getMessage()
             ], 400);
        }
    }

    public function show(Request $request)
    {
        try{
            $id = intval($request->id);
            $persontype = $this->articuloRepositorio->findArticle($id);
            return response()->json($persontype);
        }catch(Exception $e){
            return response()->json([
                'error' => 'Ha ocurrido un error' . $e->getMessage()
            ], 404);
        }
    }
    public function edit(Request $request){
        try{
            $id = intval($request->id);
            $persontype = $this->articuloRepositorio->findArticle($id);
            return response()->json($persontype);
        }catch(Exception $e){
            return response()->json([
                'error' => 'Ha ocurrido un error' . $e->getMessage()
            ], 404);
        }
    }

    public function update(StoreArticuloRequest $request)
    {
        try{
            $id = intval($request->id);
            $validatedData = $request->validated();
            $tipo_persona = $this->articuloRepositorio->updateArticle($validatedData, $id);
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
        $this->articuloRepositorio->destroyArticle($intId);
        return response()->json([
            'success' => 'Articulo eliminada correctamente'
        ], 200);
    }
}

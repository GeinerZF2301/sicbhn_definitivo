<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Services\FileUploadService;
use Illuminate\Http\Request;
use App\Models\Galeria;
use App\Http\Requests\StoreImagenRequest;
use App\Http\Requests\UpdateImagenRequest;
use App\Repositories\Interfaces\GaleriaRepositorioInterface;
use App\Repositories\GaleriaRepositorio;

class GaleriaController extends Controller
{
    protected $fileUploadService;
    protected $galeriaRepositorio;

    public function __construct(FileUploadService $fileUploadService, GaleriaRepositorioInterface $galeriaRepositorio)
    {
        $this->fileUploadService = $fileUploadService;
        $this->galeriaRepositorio = $galeriaRepositorio;
        $this->middleware('permission:ver-Galeria|crear-Galeria|editar-Galeria|borrar-Galeria',['only' => ['index']]);
        $this->middleware('permission:crear-Galeria' , ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-Galeria' , ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-Galeria' , ['only' => ['delete', 'destroy']]);
    }

    public function index()
    {
       $imagenes = $this->galeriaRepositorio->allImages();
        return view('admin.galeriaimagenes.index', compact('imagenes'));

    }
    
    public function store(StoreImagenRequest $request)
    { 
        $estadoImagen = false;
        $estadoAux = false;
        try{
            $path = 'imagenes';
            $validatedData = $request->validated();
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $fileNameUpload = $this->fileUploadService->uploadFile($file, 'public', $path, $fileName);
            $validatedData['file'] = $fileNameUpload;
            
            $estadoImagen = (boolean) $validatedData['estado'];
            $estadoAux = $estadoImagen;

            $validatedData['estado'] = $estadoAux;
            $validatedData['path'] = $path;

            $this->galeriaRepositorio->storeImage($validatedData);
            return response()->json([
                'success' => 'El Imagen ha sido creada correctamente'
            ], 200);
        }catch(Exception $exception){
            return response()->json([
                'error' => 'Ha ocurrido un error' . $exception->getMessage()
            ], 400);
        }
    }

    public function show(Request $request)
    {
        try{
            $id = intval($request->id);
            $imagen = $this->galeriaRepositorio->findImage($id);
            return response()->json($imagen);
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
            $imagen = $this->galeriaRepositorio->findImage($id);
            return response()->json($imagen);
        }catch(Exception $e){
            return response()->json([
                'error' => 'Ha ocurrido un error' . $e->getMessage()
            ], 404);
        }
    }

    public function update(UpdateImagenRequest $request){
        $id = intval($request->id);
        $validatedData = $request->validated();
        $path = 'imagenes';
        $file = $request->file('file');
        $validatedData['path'] = $path;
        $imagen = Galeria::select('file')->where('id', $id)->first(); 
        if($file){
            $fileName = $file->getClientOriginalName();
            $fileNameUpload = $this->fileUploadService->uploadFile($file, 'public', $path, $fileName);

            $validatedData['file'] = $fileNameUpload;
            $validatedData['path'] = $path;

            //Eliminar la imagen previamente cargada
            $ruta = 'imagenes/'.$imagen->file;
            Storage::disk('public')->delete($ruta);
            $imagenUpdate = $this->galeriaRepositorio->updateImage($validatedData, $id);
        }else{
            $validatedData['file'] = $imagen->file;
            $imagenUpdate = $this->galeriaRepositorio->updateImage($validatedData, $id);
        }
        return response()->json([
            'success' => 'Imagen Actualizado Correctamente'
        ], 200); 
    }

    public function delete($id)
    {
        $imagen = Galeria::select('file')->where('id', $id)->first();
        $ruta = 'imagenes/'.$imagen->file;
        $intId = intval($id);
        //if (Storage::exists($ruta)) {
            Storage::disk('public')->delete($ruta);
            $this->galeriaRepositorio->destroyImage($intId);
            return response()->json([
                'success' => 'Imagen eliminado correctamente'
            ], 200);
        //} else {
            // return response()->json([
            //     'error' => 'El archivo no existe'
            // ], 404);
       // }
        
    }
}
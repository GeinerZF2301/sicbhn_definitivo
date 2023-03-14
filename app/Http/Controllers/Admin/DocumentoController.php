<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Services\FileUploadService;
use Illuminate\Http\Request;
use App\Models\Documento;
use App\Http\Requests\StoreDocumentoRequest;
use App\Http\Requests\UpdateDocumentoRequest;
use App\Repositories\Interfaces\DocumentoRepositorioInterface;
use App\Repositories\DocumentoRepositorio;


class DocumentoController extends Controller
{
    protected $fileUploadService;
    protected $documentoRepositorio;

    public function __construct(FileUploadService $fileUploadService, DocumentoRepositorioInterface $documentoRepositorio)
    {
        $this->fileUploadService = $fileUploadService;
        $this->documentoRepositorio = $documentoRepositorio;
        $this->middleware('permission:ver-Documento|crear-Documento|editar-Documento|borrar-Documento',['only' => ['index']]);
        $this->middleware('permission:crear-Documento' , ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-Documento' , ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-Documento' , ['only' => ['delete', 'destroy']]);
    }

    public function index()
    {
        $documentos = $this->documentoRepositorio->allDocuments();
        return view('admin.documentos.index', compact('documentos'));
    }
    
    public function store(StoreDocumentoRequest $request)
    { 
        $estadoDocumento = false;
        $estadoAux = false;
        try{
            $path = 'documentos';
            $validatedData = $request->validated();
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $fileNameUpload = $this->fileUploadService->uploadFile($file, 'public', $path, $fileName);
            $validatedData['file'] = $fileNameUpload;
            
            $estadoDocumento = (boolean) $validatedData['estado'];
            $estadoAux = $estadoDocumento;

            $validatedData['estado'] = $estadoAux;
            $validatedData['path'] = $path;

            $this->documentoRepositorio->storeDocument($validatedData);
            return response()->json([
                'success' => 'El documento ha sido creado correctamente'
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
            $documento = $this->documentoRepositorio->findDocument($id);
            return response()->json($documento);
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
            $documento = $this->documentoRepositorio->findDocument($id);
            return response()->json($documento);
        }catch(Exception $e){
            return response()->json([
                'error' => 'Ha ocurrido un error' . $e->getMessage()
            ], 404);
        }
    }

    public function update(UpdateDocumentoRequest $request){
        $id = intval($request->id);
        $validatedData = $request->validated();
        $path = 'documentos';
        $file = $request->file('file');
        $validatedData['path'] = $path;
        $documento = Documento::select('file')->where('id', $id)->first(); 
        if($file){
            $fileName = $file->getClientOriginalName();
            $fileNameUpload = $this->fileUploadService->uploadFile($file, 'public', $path, $fileName);

            $validatedData['file'] = $fileNameUpload;
            $validatedData['path'] = $path;

            //Eliminar el documento previamente cargado
            $ruta = 'documentos/'.$documento->file;
            Storage::disk('public')->delete($ruta);
            $documentoUpdate = $this->documentoRepositorio->updateDocument($validatedData, $id);
        }else{
            $validatedData['file'] = $documento->file;
            $documentoUpdate = $this->documentoRepositorio->updateDocument($validatedData, $id);
        }
        return response()->json([
            'success' => 'Documento Actualizado Correctamente'
        ], 200); 
    }

    public function delete($id)
    {
        $documento = Documento::select('file')->where('id', $id)->first();
        $ruta = 'documentos/'.$documento->file;
        $intId = intval($id);
        //if (Storage::exists($ruta)) {
            Storage::disk('public')->delete($ruta);
            $this->documentoRepositorio->destroyDocument($intId);
            return response()->json([
                'success' => 'Documento eliminado correctamente'
            ], 200);
        //} else {
            // return response()->json([
            //     'error' => 'El archivo no existe'
            // ], 404);
       // }
        
    }
}

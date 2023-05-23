<?php
namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class FileDeleteService
{
    /**
     * Sube un archivo al disco especificado.
     *
     * @param  \Illuminate\Http\UploadedFile  $file
     * @param  string  $disk
     * @param  string  $path
     * @param  string|null  $fileName
     * @return string
     */
    public function deleteFile($path, $fileName)
    {
      
        $file->storeAs($path, $fileName, $disk);

        return $fileName;
    }
}
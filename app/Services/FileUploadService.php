<?php
namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class FileUploadService
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
    public function uploadFile(UploadedFile $file, $disk, $path, $fileName = null)
    {
        if (!$fileName) {
            $fileName = uniqid('', true).'.'.$file->getClientOriginalExtension();
        }
        $fileName . $file->getClientOriginalExtension();

        $file->storeAs($path, $fileName, $disk);

        return $fileName;
    }
}
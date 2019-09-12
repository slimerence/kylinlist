<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Webservice extends Controller
{
    /**
     * 为了快速获取服务器内upload文件夹的内容而创建的方法
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function getUploadFiles(){
        $date = Carbon::now();
        $zip_name = 'uploads-'.$date->format('m-d-h-i').'.zip';
        $path = public_path('storage/uploads');
        $zip = new \ZipArchive();
        $zip->open($zip_name,\ZipArchive::CREATE | \ZipArchive::OVERWRITE);
        $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path));
        foreach ($files as $name => $file)
        {
            // Skip directories (they would be added automatically)
            if (!$file->isDir())
            {
                // Get real and relative path for current file
                $filePath = $file->getRealPath();
                $relativePath = substr($filePath, strlen($path) + 1);

                // Add current file to archive
                $zip->addFile($filePath, $relativePath);
            }
        }
        // Zip archive will be created only after closing object
        $zip->close();
        return response()->download(public_path($zip_name));
    }
}

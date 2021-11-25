<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;



use ZipArchive;

class ZipArchiveController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if($request->has('download')) {
           
            $zip_file = 'qrcode.zip';
            $zip = new \ZipArchive();
            $zip->open($zip_file, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);
            
            $path = storage_path('qrcode');
            $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path));
            foreach ($files as $name => $file)
            {
                if (!$file->isDir()) {
                    $filePath     = $file->getRealPath();
                    $relativePath = 'qrcode/' . substr($filePath, strlen($path) + 1);
                    $zip->addFile($filePath, $relativePath);
                }
            }
            $zip->close();
          
            $file = new Filesystem;
            $file->cleanDirectory($path);

            
            return response()->download($zip_file);
        }
        return view('createZip');
    }
}
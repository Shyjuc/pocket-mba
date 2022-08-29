<?php 
namespace App\Helpers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
trait Media {

    public function uploads($file, $path)
    {
        if($file) {

            $fileName   = time().rand(1000,9999) . $file->getClientOriginalName();
            Storage::disk('public')->put($path . $fileName, File::get($file));
            $file_name  = $file->getClientOriginalName();
            $file_type  = $file->getClientOriginalExtension();
            $filePath   = 'storage/'.$path . $fileName;

            return $file = [
                'fileName' => $file_name,
                'fileType' => $file_type,
                'filePath' => $filePath,
                'fileSize' => $this->fileSize($file)
            ];
        }
    }

    public function fileSize($file, $precision = 2)
    {   
        $size = $file->getSize();

        if ( $size > 0 ) {
            $size = (int) $size;
            $base = log($size) / log(1024);
            $suffixes = array(' bytes', ' KB', ' MB', ' GB', ' TB');
            return round(pow(1024, $base - floor($base)), $precision) . $suffixes[floor($base)];
        }

        return $size;
    }

    public function getPubliclyStorgeFile($filename)
        {
            $path = storage_path('user/avatar/'. $filename);

            if (!File::exists($path)) {
                abort(404);
            }

         $file = File::get($path);
           //  print_r($file); exit;

          $type = File::mimeType($path);

            $response = Response::make($file, 200);

            $response->header("Content-Type", $type);

            return $response;

        }

        public function removeImage( $file_path)
        {
            if(File::exists(public_path($file_path))){
                File::delete(public_path($file_path));
                return true;
            }else{
                return false;

            }
        }
}
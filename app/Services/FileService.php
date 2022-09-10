<?php
namespace App\Services;
 
use App\Models\File;
use App\Helpers\Media;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Requests\StoreOrganizationRequest;

 
class FileService
{
    use Media;

    public function all(): Collection
    {
        return File::all();
    }

    public function validateFileFormat($file)
    {
        $allowed = array('jpg', 'png', 'pdf');
        //$filename = $_FILES['video_file']['name'];
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        if (!in_array($ext, $allowed)) {
            return false;
        }
    }

    // Todo refactor with dependency injection
    public function tradefileUpload($tradefile,$ownerId)
    {  

            $fileData2 = $this->uploads($tradefile,'files/license/');
            $trade = File::create([
                       'name' => $fileData2['fileName'],
                       'file_path' => $fileData2['filePath'],
                       'user_id' => $ownerId
                    ]);
             return ($trade->id);             
                        
    }

    public function vatfileUpload($vat_file,$ownerId)
    {               
            //$vat_file = $request->file('vat_certificate');
            $fileData3 = $this->uploads($vat_file,'files/certificate/');
            $vat = File::create([
                       'name' => $fileData3['fileName'],
                       'file_path' => $fileData3['fileType'],
                       'user_id' => $ownerId
                    ]);
            return ($vat->id);       
                        
    }
}
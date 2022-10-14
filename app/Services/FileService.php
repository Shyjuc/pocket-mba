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
            //dd($vat);        
            return ($vat->id);       
                        
    }

    public function headerImageUpload($header_file,$ownerId)
    {               
            //$vat_file = $request->file('vat_certificate');
            //dd($header_file);
            $fileData = $this->uploads($header_file,'files/headerimage/');
            $head = File::create([
                       'name' => $fileData['fileName'],
                       'file_path' => $fileData['fileType'],
                       'user_id' => $ownerId
                    ]);
            return ($head->id);       
                        
    }

    // Todo refactor with dependency injection
    public function csvfileUpload($csvfile,$ownerId)
    {  
            $fileData2 = $this->uploads($csvfile,'files/license/');
            
            $trade = File::create([
                       'name' => $fileData2['fileName'],
                       'file_path' => $fileData2['filePath'],
                       'user_id' => $ownerId
                    ]);

                    //dd($fileData2['fileName']);
                    
             return ($fileData2['filePath']);             
                        
    }
}
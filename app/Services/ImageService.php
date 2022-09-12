<?php
namespace App\Services;
 
use App\Models\Gravatar;
use App\Helpers\Media;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Requests\StoreOrganizationRequest;

 
class ImageService
{
    use Media;

    public function all(): Collection
    {
        return Gravatar::all();
    }

    // Todo refactor with dependency injection
    public function imagefileUpload($image)
    {
            //$trade_file = $request->file('trade_license');  
            $fileData = $this->uploads($image,'user/avatar/');
            $media = Gravatar::create([
                       'media_name' => $fileData['fileName'],
                       'media_type' => $fileData['fileType'],
                       'media_path' => $fileData['filePath'],
                       'media_size' => $fileData['fileSize']
                    ]);        
            return ($media->id);            
    }

    public function headerImageUpload($image)
    {
            //$trade_file = $request->file('trade_license');  
            $fileData = $this->uploads($image,'user/headerimage/');
            $media = Gravatar::create([
                       'media_name' => $fileData['fileName'],
                       'media_type' => $fileData['fileType'],
                       'media_path' => $fileData['filePath'],
                       'media_size' => $fileData['fileSize']
                    ]);        
            return ($media->id);            
    }

}
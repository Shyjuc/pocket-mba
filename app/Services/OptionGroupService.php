<?php
namespace App\Services;
 
use App\Models\OptionGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Collection;
 
class OptionGroupService
{
    public function all(): Collection
    {
        
        return OptionGroup::with('option')->get();

    }

    
}
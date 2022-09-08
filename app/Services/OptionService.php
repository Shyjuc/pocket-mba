<?php
namespace App\Services;
 
use App\Models\Option;
use Illuminate\Http\Request;
use App\Services\OptionGroupService;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Collection;
 
class OptionService
{
    public function all(): Collection
    {
        return Option::all();
    }

    // Todo refactor with dependency injection.
    public function get_options_by_group($group_code): Array
    {
        $option_group_service = new OptionGroupService(); 
        $option_groups = $option_group_service->all();
        return $option_groups->where('name',$group_code)->first()->option->all();
    }

    public function get_business_nature(): Array
    {
        return $this->get_options_by_group('nature_of_the_business');
    }
}
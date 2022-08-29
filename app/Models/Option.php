<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    public function option_option_group()
    {
    	
        return $this->BelongsToMany('App\Models\Optiongroup', 'option_optiongroup', 'option_id','optiongroup_id');
        
    }

}

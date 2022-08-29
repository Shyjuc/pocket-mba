<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Optiongroup extends Model
{
    use HasFactory;

    public function option_option_group()
    {
    	return $this->BelongsToMany('App\Models\Option', 'option_optiongroup', 'optiongroup_id', 'option_id');
    }

    public function option()
    {
    	return $this->BelongsToMany('App\Models\Option', 'option_optiongroup', 'optiongroup_id', 'option_id');
    }

}

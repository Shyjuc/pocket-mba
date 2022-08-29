<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option_Optiongroup extends Model
{
    use HasFactory;
    protected $table = 'option_optiongroup';

    public function Options()
    {
    	return $this->belongsTo('App\Models\Option', 'option_id');
    }

    public function Optiongroup()
    {
    	return $this->belongsTo('App\Models\Optiongroup', 'optiongroup_id');
    }

}

<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Organization extends Model
{
    use HasFactory;
    protected $fillable = ['name','owner_id'];

    public function owner()
    {
    	return $this->belongsTo('App\Models\User');
    }

    public function company_status()
    {
        return $this->belongsTo('App\Models\Option','company_status_id');
    }
    
    public function status()
    {
        return $this->belongsTo('App\Models\Option','status_id');
    } 
    
    public function nature_of_the_business()
    {
    	return $this->belongsTo('App\Models\Option', 'nature_of_the_business_id');
    } 

    public function shareholder()
    {
    	
        return $this->hasMany('App\Models\Shareholder', 'organization_id');
        
    }

    public function personnels()
    {
    	
        return $this->hasMany('App\Models\Personnel', 'organization_id');
        
    }

    public function contacts()
    {
        return $this->hasMany('App\Models\Contact', 'organization_id'); 
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'organization_user');
    }

    //
    public function vat_certificate()
    {
        return $this->belongsTo(File::class, 'vat_certificate_id');
    }
   
    //Add for trade license
    public function trade_license()
    {
        return $this->belongsTo(File::class, 'trade_license_id');
    }

    public function image()
    {
        return $this->belongsTo(Gravatar::class);
    }

    public function header_image()
    {
        return $this->belongsTo(Gravatar::class, 'header_image_id');
    }


}

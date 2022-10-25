<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tonysm\RichTextLaravel\Models\Traits\HasRichText;

class Proposal extends Model
{
    use HasFactory,HasRichText;
    protected $fillable = ['title','description','demurrage','organization_id','user_id','to_organization_id','to_user_id','stage_id','status_id','expiry_date'];

    protected $richTextFields = [
        'body'
    ];

    public function status()
    {
        return $this->belongsTo('App\Models\Option','status_id');
    } 

    public function stage()
    {
        return $this->belongsTo('App\Models\Option','stage_id');
    } 

    public function category()
    {
        return $this->belongsTo('App\Models\Category','category_id');
    }

    public function organization()
    {
        return $this->belongsTo('App\Models\Organization','organization_id');
    }  

    public function toOrganization()
    {
        return $this->belongsTo('App\Models\Organization','to_organization_id');
    } 

    public function toUser()
    {
        return $this->belongsTo('App\Models\User','to_user_id');
    }

    public function comments()
    {
       return $this->hasMany(Comment::class);
    } 

    public function statuses()
    {
       return $this->BelongsToMany('App\Models\Option', 'proposal_statuses', 'proposal_id', 'option_id');
    }

    public function deals_image()
    {
        return $this->belongsTo(Gravatar::class, 'deals_image_id');
    } 
}

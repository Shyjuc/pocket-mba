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
}

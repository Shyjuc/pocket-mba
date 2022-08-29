<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tonysm\RichTextLaravel\Models\Traits\HasRichText;

class Proposal extends Model
{
    use HasFactory,HasRichText;
    protected $fillable = ['title','description','demurrage'];

    protected $richTextFields = [
        'body'
    ];
}

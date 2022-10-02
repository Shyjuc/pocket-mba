<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tonysm\RichTextLaravel\Models\Traits\HasRichText;

class Comment extends Model
{
    use HasFactory,HasRichText;

    protected $richTextFields = [
        'body'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}

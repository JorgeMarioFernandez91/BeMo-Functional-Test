<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestrictedContent extends Model
{
    protected $fillable = [
        'title',
        'body',      
    ];
}

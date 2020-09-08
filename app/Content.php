<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'text',
        'bold',   
        'italics',
        'strikethrough',
        'createlinks',   
        'centertext',
        'h1',
        'h2',
        'h3',
    ];
}

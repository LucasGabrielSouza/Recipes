<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    protected $fillable = [ 
        'name',
        'message',
        'email'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class content extends Model
{
     protected $fillable = [
            'user_id',
            'title', 
            'body', 
            'keywords', 
            'rememberToken',
            
    ];
}

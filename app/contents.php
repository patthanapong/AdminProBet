<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contents extends Model
{
     protected $fillable = [
            'user_id',
            'bankdeposit', 
            'title', 
            'body', 
            'keywords', 
            'rememberToken',
            
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $fillable=[
        'description','title','author_name','genre_id'
    
    ];
}

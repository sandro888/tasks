<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable=[
        "title","description","price","image","category_id"
    ];
    // public function user(){
    //     return $this->belongsTo('App\User');
    // }
}

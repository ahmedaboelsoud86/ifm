<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends  Model  
{
    

    protected $guarded = [];


    public function photos()
    {
        return $this->morphOne(Photo::class,'commentable');
    }


   


}

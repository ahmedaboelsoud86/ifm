<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Category extends  Model implements TranslatableContract 
{
    use Translatable;

    protected $guarded = [];
    public $translatedAttributes = ['title'];


    public function facilities()
    {
        return $this->hasMany(Facility::class);
    }
    public function facility()
    {
        return $this->hasOne(Facility::class);
    }

   


}

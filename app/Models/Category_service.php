<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Category_service extends  Model implements TranslatableContract 
{
    use Translatable;

    protected $guarded = [];
    public $translatedAttributes = ['title'];


    public function services()
    {
        return $this->hasMany(Service::class);
    }
    public function service()
    {
        return $this->hasOne(Service::class);
    }

   


}

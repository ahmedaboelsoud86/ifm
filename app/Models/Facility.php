<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Facility extends  Model implements TranslatableContract 
{
    use Translatable;

    protected $guarded = [];
    public $translatedAttributes = ['title','description'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
   


}

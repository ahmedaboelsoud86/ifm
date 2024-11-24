<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Service extends  Model implements TranslatableContract 
{
    use Translatable;

    protected $guarded = [];
    public $translatedAttributes = ['title','description'];

    public function category_service()
    {
        return $this->belongsTo(Category_service::class);
    }
   


}

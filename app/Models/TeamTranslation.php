<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['username','title'];

}//end of model

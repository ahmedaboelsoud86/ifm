<?php

namespace App\Observers;
use App\Models\Award;
use Illuminate\Http\Request;
use File;
class AwardObserver
{
    public function deleted(Award $award)
    {
        if(File::exists(public_path('assets/images/'.$award->photos?->image) )){
            unlink(public_path('assets/images/'.$award->photos?->image) );
        }
        $award->photos?->delete();
    }
    
}



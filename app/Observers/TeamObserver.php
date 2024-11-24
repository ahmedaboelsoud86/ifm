<?php

namespace App\Observers;
use App\Models\Team;
use Illuminate\Http\Request;
use File;
class TeamObserver
{
    public function deleted(Team $team)
    {
        if(File::exists(public_path('assets/images/'.$team->image) )){
            unlink(public_path('assets/images/'.$team->image) );
        }
    }
   
}

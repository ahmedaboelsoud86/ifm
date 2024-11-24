<?php

namespace App\Observers;
use App\Models\Facility;
use Illuminate\Http\Request;
use File;
class FacilityObserver
{
    /**
     * Handle the Facility "created" event.
     */
    public function created(Facility $facility): void
    {
       // dd($Facility);
    }

    public function updating(Facility $facility)
    {
        
    }

    public function updated(Facility $facility)
    {
       
    }


    public function deleted(Facility $facility)
    {
        if(File::exists(public_path('assets/images/'.$facility->image) )){
            unlink(public_path('assets/images/'.$facility->image) );
        }
    }
    /**
     * Handle the Facility "restored" event.
     */
    public function restored(Facility $facility): void
    {
        //
    }

    /**
     * Handle the Slider "force deleted" event.
     */
    public function forceDeleted(Facility $facility): void
    {
        //
    }
}

<?php

namespace App\Observers;
use App\Models\About;
use Illuminate\Http\Request;
use File;
class AboutObserver
{
    /**
     * Handle the About "created" event.
     */
    public function created(About $about): void
    {
       
    }

    public function updating(About $about)
    {
       
    }

    public function updated(About $about)
    {
       
    }


    public function deleted(About $about)
    {
        if(File::exists(public_path('assets/images/'.$about->frist_image) )){
            unlink(public_path('assets/images/'.$about->frist_image) );
        }
        if(File::exists(public_path('assets/images/'.$about->second_image) )){
            unlink(public_path('assets/images/'.$about->second_image) );
        }
    }
    /**
     * Handle the About "restored" event.
     */
    public function restored(About $about): void
    {
        //
    }

    /**
     * Handle the About "force deleted" event.
     */
    public function forceDeleted(About $about): void
    {
        //
    }
}

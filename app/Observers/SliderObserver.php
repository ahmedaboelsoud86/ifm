<?php

namespace App\Observers;
use App\Models\Slider;
use Illuminate\Http\Request;
use File;
class SliderObserver
{
    /**
     * Handle the Slider "created" event.
     */
    public function created(Slider $slider): void
    {
       // dd($slider);
    }

    public function updating(Slider $slider)
    {
        // dd($slider->image);
        // if($slider->image){
        //     if(File::exists(public_path('assets/images/'.$slider->image) )){
        //         unlink(public_path('assets/images/'.$slider->image) );
        //     }
        //    // $slider->image = "llllll"; 
                
        // }
    }

    public function updated(Slider $slider)
    {
        // //dd($slider->image);
        // if($slider->image){
        //     if(File::exists(public_path('assets/images/'.$slider->image) )){
        //         unlink(public_path('assets/images/'.$slider->image) );
        //     }
           
                
        // }
    }


    public function deleted(Slider $slider)
    {
        if(File::exists(public_path('assets/images/'.$slider->image) )){
            unlink(public_path('assets/images/'.$slider->image) );
        }
    }
    /**
     * Handle the Slider "restored" event.
     */
    public function restored(Slider $slider): void
    {
        //
    }

    /**
     * Handle the Slider "force deleted" event.
     */
    public function forceDeleted(Slider $slider): void
    {
        //
    }
}

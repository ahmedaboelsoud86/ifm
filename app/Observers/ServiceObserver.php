<?php

namespace App\Observers;
use App\Models\Service;
use Illuminate\Http\Request;
use File;
class ServiceObserver
{
    public function deleted(Service $service)
    {
        if(File::exists(public_path('assets/images/'.$service->image) )){
            unlink(public_path('assets/images/'.$service->image) );
        }
    }
   
}

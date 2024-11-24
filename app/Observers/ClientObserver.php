<?php

namespace App\Observers;
use App\Models\Client;
use Illuminate\Http\Request;
use File;
class ClientObserver
{
    public function deleted(Client $client)
    {
        if(File::exists(public_path('assets/images/'.$client->photos?->image) )){
            unlink(public_path('assets/images/'.$client->photos?->image) );
        }
        $client->photos?->delete();
    }
    
}

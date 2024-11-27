<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Privacy;

class PrivacyController extends Controller
{
    public function index(){
        $privacy = Privacy::first();
        return view('front.pages.privacy-policy',compact('privacy'));

    }
}

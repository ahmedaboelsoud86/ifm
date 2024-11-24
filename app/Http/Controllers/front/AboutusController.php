<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Client;
use App\Models\Facility;

class AboutusController extends Controller
{
    public function index(){
        
        $facilities = Facility::orderby('id','desc')->limit(4)->get();
        $about = About::first();
        $clients = Client::orderby('id','desc')->limit(8)->get();
        return view('front.pages.about',compact('about','clients','facilities'));

    }
}

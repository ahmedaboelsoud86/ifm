<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\About;
use App\Models\Facility;
use App\Models\Article;
use App\Models\Client;

class HomeController extends Controller
{
    public function index(){
        
        $sliders = Slider::orderby('id','desc')->limit(5)->get();
        $facilities = Facility::orderby('id','desc')->limit(5)->get();
        $articles = Article::orderby('id','desc')->limit(3)->get();
        $news = Facility::orderby('id','desc')->limit(5)->get();
        $clients = Client::orderby('id','desc')->limit(8)->get();
        $about = About::first();
        return view('front.pages.home',compact('sliders','about','facilities','articles','clients'));

    }
}

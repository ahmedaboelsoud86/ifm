<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Jorenvh\Share\ShareFacade as Share;

class NewsController extends Controller
{
    public function index(){
        $articles = Article::latest()->paginate(6);
        return view('front.pages.news',compact('articles'));
    }

    public function news_inner(Article $article){
        $links = Share::page('https://www.lipsum.com/', 'Social Share Blog')
            ->facebook()
            ->twitter()
            ->linkedin()
            ->whatsapp()
            ->getRawLinks();
       
      
        $article->increment('read',1);
        $most_read = $article->orderBy('read','DESC')->take('5')->get();
        return view('front.pages.news_inner',compact('article','most_read','links'));
    }
}

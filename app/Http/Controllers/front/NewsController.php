<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use  App\Models\ArticleTranslation;
use Jorenvh\Share\ShareFacade as Share;
use Illuminate\Support\Facades\Input; 

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

    public function search(){
        if(isset($_GET['q']) && !empty($_GET['q'])){
              $q =  $_GET['q'];
              $articles = Article::whereTranslationLike ('title', '%' . $q . '%' )
                                ->orWhereTranslationLike('description', '%' . $q . '%')
                                ->paginate(6)
                                ->setPath( '' );
                                $pagination = $articles->appends ( array (
                                    'q' => $_GET['q']
                                ) );
            if (count ( $articles ) > 0){
                return view ( 'front.pages.news' )->with("articles", $articles )->withQuery ( $q );  
            }else{
                return view ( 'front.pages.news' )->with("articles", $articles )->withQuery ( $q ); 
            }    
        }
        $articles = Article::latest()->paginate(8);
        return view('front.pages.news',compact('articles'));
    }
}


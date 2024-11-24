<?php

namespace App\Observers;
use App\Models\Article;
use Illuminate\Http\Request;
use File;
class ArticleObserver
{
    



    public function deleted(Article $article)
    {
        if(File::exists(public_path('assets/images/'.$article->image) )){
            unlink(public_path('assets/images/'.$article->image) );
        }
    }
}

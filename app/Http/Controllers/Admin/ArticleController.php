<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\ArticleRequest;
use Image;
use File;


class ArticleController extends Controller
{
    public function __construct()
    {
        // $this->middleware('permission:read_movies')->only(['index']);
        // $this->middleware('permission:create_movies')->only(['create', 'store']);
        // $this->middleware('permission:update_movies')->only(['edit', 'update']);
        // $this->middleware('permission:delete_movies')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
        $articles = Article::get();
        return view('admin.articles.list', compact('articles'));
    }// end of index
    public function destroy(Article $article)
    {
        $article->delete();
        session()->flash('msg', __('site.deleted_successfully'));
        return redirect('admin/articles');

    }// end of delete

    public function create()
    {
        return view('admin.articles.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request){
        $requestData = $request->all();
        if($request->hasfile('image')){
            $imageName = rand(100,1000).time().'.'.$request->image->extension();
            $request->image->move(public_path('assets/images'), $imageName);
            $requestData['image'] = $imageName;
        }
        $article =  Article::create($requestData);
        session()->flash('msg', __('site.added_successfully'));
        return redirect('admin/articles');
     }

     public function edit(Article $article){
        return view('admin.articles.edit',compact('article'));
     }

     public function update(ArticleRequest $request,Article $article){
        $requestData = $request->all();
        if($request->hasfile('image')){
            /// DELETE OLD Image 
            if(File::exists(public_path('assets/images/'.$article->image) )){
                unlink(public_path('assets/images/'.$article->image) );
            }
            $imageName = rand(100,1000).time().'.'.$request->image->extension();
            $request->image->move(public_path('assets/images'), $imageName);
            $requestData['image'] = $imageName;
        }
        $article->update($requestData);
        session()->flash('msg', __('site.updated_successfully'));
        return redirect('admin/articles');
     }


}//end of contro

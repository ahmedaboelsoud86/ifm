<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;


use Cviebrock\EloquentSluggable\Services\SlugService;

class CategoryController extends Controller
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
        $categories = Category::get();
        return view('admin.categories.list', compact('categories'));
    }// end of index
    public function destroy(Category $category)
    {
        $category->delete();
        session()->flash('msg', __('site.deleted_successfully'));
        return redirect('admin/categories');

    }// end of delete

    public function create()
    {
        return view('admin.categories.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request){
        $requestData = $request->all();
        $category =  Category::create($requestData);
        session()->flash('msg', __('site.added_successfully'));
        return redirect('admin/categories');
     }

     public function edit(Category $category){
        return view('admin.categories.edit',compact('category'));
     }

     public function update(CategoryRequest $request,Category $category){
        $requestData = $request->all();
        $category->update($requestData);
        session()->flash('msg', __('site.updated_successfully'));
        return redirect('admin/categories');
     }


}//end of contro

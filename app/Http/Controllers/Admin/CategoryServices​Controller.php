<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category_service;
use App\Http\Requests\CategoryServiceRequest;


use Cviebrock\EloquentSluggable\Services\SlugService;

class CategoryServices​Controller extends Controller
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
        $categories = Category_service::get();
        return view('admin.category_services.list', compact('categories'));
    }// end of index
    public function destroy(Category_service $category_service)
    {
         $category_service->delete();
        session()->flash('msg', __('site.deleted_successfully'));
        return redirect('admin/category_services');

    }// end of delete

    public function create()
    {
        return view('admin.category_services.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryServiceRequest $request){
        $category =  Category_service::create($request->all());
        session()->flash('msg', __('site.added_successfully'));
        return redirect('admin/category_services');
     }

     public function edit(Category_service $category_service){
        return view('admin.category_services.edit',compact('category_service'));
     }

     public function update(CategoryServiceRequest $request,Category_service $category_service){
        $category_service->update($request->all());
        session()->flash('msg', __('site.updated_successfully'));
        return redirect('admin/category_services');
     }


}//end of contro

<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Category_service;
use App\Http\Requests\ServiceRequest;
use Image;
use File;


class ServicesController extends Controller
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
        $services = Service::get();
        return view('admin.services.list', compact('services'));
    }// end of index
    public function destroy(Service $service)
    {
        $service->delete();
        session()->flash('msg', __('site.deleted_successfully'));
        return redirect('admin/services');

    }// end of delete

    public function create()
    {
        $categories = Category_service::with('translations')->get();
        return view('admin.services.create',compact('categories'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request){
        $requestData = $request->all();
        if($request->hasfile('image')){
            $imageName = rand(100,1000).time().'.'.$request->image->extension();
            $request->image->move(public_path('assets/images'), $imageName);
            $requestData['image'] = $imageName;
        }
        $service =  Service::create($requestData);
        session()->flash('msg', __('site.added_successfully'));
        return redirect('admin/services');
     }

     public function edit(Service $service){
        return view('admin.services.edit',compact('service'));
     }

     public function update(ServiceRequest $request,Service $service){
        $requestData = $request->all();
        if($request->hasfile('image')){

            /// DELETE OLD Image 
            if(File::exists(public_path('assets/images/'.$service->image) )){
                unlink(public_path('assets/images/'.$service->image) );
            }
            
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('assets/images'), $imageName);
            $requestData['image'] = $imageName;
        }
        $service->update($requestData);
        session()->flash('msg', __('site.updated_successfully'));
        return redirect('admin/services');
     }


}//end of contro

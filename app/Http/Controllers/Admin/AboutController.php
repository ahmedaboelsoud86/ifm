<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Http\Requests\AboutRequest;
use File;

use Cviebrock\EloquentSluggable\Services\SlugService;

class AboutController extends Controller
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
        $about = About::first();
        return view('admin.abouts.list', compact('about'));
    }// end of index
    public function destroy(About $about)
    {
        $about->delete();
        session()->flash('msg', __('site.deleted_successfully'));
        return redirect('admin/abouts');

    }// end of delete

    public function create()
    {
        $about = About::first();
        return view('admin.abouts.create',compact('about'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutRequest $request){
        $about = About::first();
        if(!$about){
            $requestData = $request->all();
            if($request->hasfile('frist_image')){
                $imageName1 = rand(2,50).time().'.'.$request->frist_image->extension();
                $request->frist_image->move(public_path('assets/images'), $imageName1);
                $requestData['frist_image'] = $imageName1;
            }
            if($request->hasfile('second_image')){
                $imageName2 = time().rand(2,50).'.'.$request->second_image->extension();
                $request->second_image->move(public_path('assets/images'), $imageName2);
                $requestData['second_image'] = $imageName2;
            }
            $about =  About::create($requestData);
 
            session()->flash('msg', __('site.added_successfully'));
            return redirect('admin/abouts');
        }
        
     }

     public function edit(About $about){
        return view('admin.abouts.edit',compact('about'));
     }

     public function update(AboutRequest $request,About $about){
        $requestData = $request->all();
        if($request->hasfile('frist_image')){
            //DELETE frist_image Image 
            if(File::exists(public_path('assets/images/'.$about->frist_image) )){
               unlink(public_path('assets/images/'.$about->frist_image) );
            }
            $imageName1 = rand(2,50).time().'.'.$request->frist_image->extension();
            $request->frist_image->move(public_path('assets/images'), $imageName1);
            $requestData['frist_image'] = $imageName1;

        }   
        if($request->hasfile('second_image')){
            if(File::exists(public_path('assets/images/'.$about->second_image) )){
                unlink(public_path('assets/images/'.$about->second_image));
            }
            $imageName2 = time().rand(2,50).'.'.$request->second_image->extension();
            $request->second_image->move(public_path('assets/images'), $imageName2);
            $requestData['second_image'] = $imageName2;
        }
        $about->update($requestData);
        session()->flash('msg', __('site.updated_successfully'));
        return redirect('admin/abouts');
     }


}//end of contro

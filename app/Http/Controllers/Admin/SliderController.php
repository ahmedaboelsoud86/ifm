<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Http\Requests\SliderRequest;
use Image;
use File;
use Cviebrock\EloquentSluggable\Services\SlugService;

class SliderController extends Controller
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
        $sliders = Slider::get();
        return view('admin.sliders.list', compact('sliders'));
    }// end of index
    public function destroy(Slider $slider)
    {
        $slider->delete();
        session()->flash('msg', __('site.deleted_successfully'));
        return redirect('admin/sliders');

    }// end of delete

    public function create()
    {
        return view('admin.sliders.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request){
        $requestData = $request->all();
        if($request->hasfile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('assets/images'), $imageName);
            $requestData['image'] = $imageName;
        }
        $slider =  Slider::create($requestData);
        session()->flash('msg', __('site.added_successfully'));
        return redirect('admin/sliders');
     }

     public function edit(Slider $slider){
        return view('admin.sliders.edit',compact('slider'));
     }

     public function update(SliderRequest $request,Slider $slider){
        $requestData = $request->all();
        if($request->hasfile('image')){

            /// DELETE OLD Image 
            if(File::exists(public_path('assets/images/'.$slider->image) )){
                unlink(public_path('assets/images/'.$slider->image) );
            }
            
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('assets/images'), $imageName);
            $requestData['image'] = $imageName;
        }
        $slider->update($requestData);
        session()->flash('msg', __('site.updated_successfully'));
        return redirect('admin/sliders');
     }


}//end of contro

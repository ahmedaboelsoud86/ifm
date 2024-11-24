<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facility;
use App\Models\Category;
use App\Http\Requests\FacilityRequest;
use Image;
use File;


class FacilitieController extends Controller
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
        $facilities = Facility::get();
        return view('admin.facilities.list', compact('facilities'));
    }// end of index
    public function destroy(Facility $facility)
    {
        $facility->delete();
        session()->flash('msg', __('site.deleted_successfully'));
        return redirect('admin/facilities');

    }// end of delete

    public function create()
    {
        $categories = Category::with('translations')->get();
        return view('admin.facilities.create',compact('categories'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FacilityRequest $request){
        $requestData = $request->all();
        if($request->hasfile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('assets/images'), $imageName);
            $requestData['image'] = $imageName;
        }
        $facilities =  Facility::create($requestData);
        session()->flash('msg', __('site.added_successfully'));
        return redirect('admin/facilities');
     }

     public function edit(Facility $facility){
        return view('admin.facilities.edit',compact('facility'));
     }

     public function update(FacilityRequest $request,Facility $facility){
        $requestData = $request->all();
        if($request->hasfile('image')){

            /// DELETE OLD Image 
            if(File::exists(public_path('assets/images/'.$facility->image) )){
                unlink(public_path('assets/images/'.$facility->image) );
            }
            
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('assets/images'), $imageName);
            $requestData['image'] = $imageName;
        }
        $facility->update($requestData);
        session()->flash('msg', __('site.updated_successfully'));
        return redirect('admin/facilities');
     }


}//end of contro

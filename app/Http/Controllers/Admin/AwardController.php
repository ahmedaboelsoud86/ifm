<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Award;
use App\Models\Photo;
use App\Http\Requests\AwardRequest;
use Image;
use File;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AwardController extends Controller
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
        $awards = Award::with('photos')->get();
        return view('admin.awards.list', compact('awards'));
    }// end of index
    public function destroy(Award $award)
    {
        $award->delete();
        session()->flash('msg', __('site.deleted_successfully'));
        return redirect('admin/awards');

    }// end of delete

    public function create()
    {
        return view('admin.awards.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AwardRequest $request){
        $award = new Award();
        $award->save();
        if($request->hasfile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('assets/images'), $imageName);
            $photo = new Photo();
            $photo->image = $imageName;
            $award->photos()->save($photo);
        }
        session()->flash('msg', __('site.added_successfully'));
        return redirect('admin/awards');
     }

   


}//end of contro

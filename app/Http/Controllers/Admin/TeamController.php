<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Http\Requests\TeamRequest;
use Image;
use File;
use Cviebrock\EloquentSluggable\Services\SlugService;

class TeamController extends Controller
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
        $teams = Team::get();
        return view('admin.teams.list', compact('teams'));
    }// end of index
    public function destroy(Team $team)
    {
        $team->delete();
        session()->flash('msg', __('site.deleted_successfully'));
        return redirect('admin/teams');

    }// end of delete

    public function create()
    {
        return view('admin.teams.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamRequest $request){
        $requestData = $request->all();
        if($request->hasfile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('assets/images'), $imageName);
            $requestData['image'] = $imageName;
        }
        $team =  Team::create($requestData);
        session()->flash('msg', __('site.added_successfully'));
        return redirect('admin/teams');
     }

     public function edit(Team $team){
        return view('admin.teams.edit',compact('team'));
     }

     public function update(TeamRequest $request,Team $team){
        $requestData = $request->all();
        if($request->hasfile('image')){

            /// DELETE OLD Image 
            if(File::exists(public_path('assets/images/'.$team->image) )){
                unlink(public_path('assets/images/'.$team->image) );
            }
            
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('assets/images'), $imageName);
            $requestData['image'] = $imageName;
        }
        $team->update($requestData);
        session()->flash('msg', __('site.updated_successfully'));
        return redirect('admin/teams');
     }


}//end of contro

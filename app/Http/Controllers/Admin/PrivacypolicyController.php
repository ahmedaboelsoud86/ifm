<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Privacy;
use App\Http\Requests\PrivacyRequest;


use Cviebrock\EloquentSluggable\Services\SlugService;

class PrivacypolicyController extends Controller
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
        $privacy = Privacy::first();
        return view('admin.privacies.list', compact('privacy'));
    }// end of index
    public function destroy(Privacy $privacy)
    {
        $privacy->delete();
        session()->flash('msg', __('site.deleted_successfully'));
        return redirect('admin/privacies');

    }// end of delete

    public function create()
    {
        $privacy = Privacy::first();
        return view('admin.privacies.create',compact('privacy'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PrivacyRequest $request){
        $privacy = Privacy::first();
        if(!$privacy){
            $privacy =  Privacy::create($request->all());
            session()->flash('msg', __('site.added_successfully'));
            return redirect('admin/privacies');
        }
     }

     public function edit(Privacy $privacy){
        return view('admin.privacies.edit',compact('privacy'));
     }

     public function update(PrivacyRequest $request,Privacy $privacy){
        $requestData = $request->all();


        $privacy->update($requestData);
        session()->flash('msg', __('site.updated_successfully'));
        return redirect('admin/privacies');
     }


}//end of contro

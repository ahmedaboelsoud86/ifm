<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Photo;
use App\Http\Requests\ClientRequest;
use Image;
use File;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ClientController extends Controller
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
        $clients = Client::with('photos')->get();
        return view('admin.clients.list', compact('clients'));
    }// end of index
    public function destroy(Client $client)
    {
        $client->delete();
        session()->flash('msg', __('site.deleted_successfully'));
        return redirect('admin/clients');

    }// end of delete

    public function create()
    {
        return view('admin.clients.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request){
        $client = new Client();
        $client->save();
        if($request->hasfile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('assets/images'), $imageName);
            $photo = new Photo();
            $photo->image = $imageName;
            $client->photos()->save($photo);
        }
        session()->flash('msg', __('site.added_successfully'));
        return redirect('admin/clients');
     }

   


}//end of contro

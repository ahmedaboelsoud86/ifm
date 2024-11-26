<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;


use Cviebrock\EloquentSluggable\Services\SlugService;

class UserController extends Controller
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
        $users = User::get();
        return view('admin.users.list', compact('users'));
    }// end of index
    public function destroy(User $user)
    {
        if(auth()->user()->id != $user->id){
            $user->delete();
            session()->flash('msg', __('site.deleted_successfully'));
            return redirect('admin/users');
        }
    }// end of delete

    public function create()
    {
        $user = User::first();
        return view('admin.users.create',compact('user'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request){
        $user =  User::create($request->all());
        session()->flash('msg', __('site.added_successfully'));
        return redirect('admin/users');
     }


}//end of contro

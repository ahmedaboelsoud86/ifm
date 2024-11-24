<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Help;




class HelpController extends Controller
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
        $helps = Help::get();
        return view('admin.helps.list', compact('helps'));
    }// end of index
    public function destroy(Help $help)
    {
        $help->delete();
        session()->flash('msg', __('site.deleted_successfully'));
        return redirect('admin/helps');

    }

    public function show(Help $help)
    {
        return view('admin.helps.show', compact('help'));
    }


}//end of contro

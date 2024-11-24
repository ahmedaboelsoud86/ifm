<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contactinfo;
use App\Http\Requests\ContactinfoRequest;


use Cviebrock\EloquentSluggable\Services\SlugService;

class SettingsController extends Controller
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
        $contactinfo = Contactinfo::first();
        return view('admin.contactinfos.list', compact('contactinfo'));
    }// end of index
    public function destroy(Contactinfo $contactinfo)
    {
        $contactinfo->delete();
        session()->flash('msg', __('site.deleted_successfully'));
        return redirect('admin/settings');

    }// end of delete

    public function create()
    { 
        return view('admin.contactinfos.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactinfoRequest $request){
        $contactinfo = Contactinfo::first();
        if(!$contactinfo){
            $arr = array(
                'adress_en' => $request->adress_en,
                'adress_ar' => $request->adress_ar, 
            );
            $arr_tojson = json_encode($arr);
            $contactinfo =  Contactinfo::create([
                'adress' => $arr_tojson,
                'statistics' =>'statistics',
                'phone' => $request->phone,
                'email' => $request->email,
                'whatsapp' => $request->whatsapp,
                'linkedin' => $request->linkedin, 
                'youtube' => $request->youtube,
                'instagram' => $request->instagram,
                'facebok' => $request->facebok,
                'twitter' => $request->twitter,
            ]);
            session()->flash('msg', __('site.added_successfully'));
            return redirect('admin/settings');
        }
       
     }

     public function edit(Contactinfo $contactinfo){
        return view('admin.settings.edit',compact('contactinfo'));
     }

     public function update(ContactinfoRequest $request,Contactinfo $contactinfo){
        $contactinfo->update($request->all());
        session()->flash('msg', __('site.updated_successfully'));
        return redirect('admin/settings');
     }


}//end of contro

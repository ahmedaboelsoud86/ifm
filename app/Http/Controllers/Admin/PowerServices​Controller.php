<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Power_service;
use App\Http\Requests\PowerServiceRequest;



class PowerServices​Controller extends Controller
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
        $power_services = Power_service::get();
        return view('admin.power_services.list', compact('power_services'));
    }// end of index
    public function destroy(Power_service $power_service)
    {
        $power_service->delete();
        session()->flash('msg', __('site.deleted_successfully'));
        return redirect('admin/power_services');

    }// end of delete

    public function create()
    {
        return view('admin.power_services.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PowerServiceRequest $request){
        $requestData = $request->all();
        $power_services =  Power_service::create($requestData);
        session()->flash('msg', __('site.added_successfully'));
        return redirect('admin/power_services');
     }

     public function edit(Power_service $power_service){
        return view('admin.power_services.edit',compact('power_service'));
     }

     public function update(PowerServiceRequest $request,Power_service $power_service){
        $requestData = $request->all();
        $power_service->update($requestData);
        session()->flash('msg', __('site.updated_successfully'));
        return redirect('admin/power_services');
     }


}//end of contro

<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facility;
use App\Models\Category;
use App\Models\Power_service;
use App\Models\Award;
use App\Models\Team;
use App\Models\Help;
use App\Models\Category_service;
use App\Http\Requests\HelpRequest;

class ServicesController extends Controller
{
    public function index(){
        
         $category_services = Category_service::latest()->take(4)->with('services',function($q){
            $q->latest()->take(3);
        })->get();
        return view('front.pages.services',compact('category_services'));

    }
    public function services_inner(Facility $facility){
        $power_services = Power_service::take('4')->latest()->get();
        $awards = Award::take('7')->latest()->get();
        $categories = Category::whereHas('facilities')->with('facility')->take('5')->get();
        $teams = Team::take('4')->get();
        return view('front.pages.services-inner',compact('facility','categories','power_services','awards','teams'));
    }

    public function store(HelpRequest $request){
        if($request->type === 'enquiry'){
            $arr = array(
                'type'   => 'enquiry',
                'enquiry' => $request->enquiry, 
            );
        } elseif ($request->type === 'takamul'){
            $arr = array(
                'type'   => 'takamul',
                "select_sector" =>$request->select_sector,
                "select_service" =>$request->select_service,
                'takamul' => $request->takamul, 
            );
        }else{ $arr = array('type'   => 'none',); }
        $arr_tojson = json_encode($arr);
        Help::create([
            'title'         => $request->title,
            'first_name'    => $request->first_name,
            'last_name'     => $request->last_name,
            'phone'         => $request->phone,
            'email'         => $request->email,
            'company_name'  => $request->company_name,
            'company_size'  => $request->company_size,
            "message"       => $arr_tojson
        ]);
        session()->flash('msg', __('site.sent_successfully'));
        if(isset($request->facility_title) && isset ($request->facility_title)){
            return redirect('/services-inner'.'/'.$request->facility_id.'/'.$request->facility_title);
        }else{
            return redirect('/services');
        }
       

    }
}

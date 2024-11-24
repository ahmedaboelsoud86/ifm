<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;


class ClientsController extends Controller
{
    public function index(){

        $clients = Client::orderby('id','desc')->limit(16)->get();
        return view('front.pages.clients',compact('clients'));

    }
}

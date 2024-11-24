<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactusRequest;

class ContactusController extends Controller
{
    public function index(){

        return view('front.pages.contactus');

    }

    public function contact_us(ContactusRequest $req){

        Contact::create([
            'yourname' => $req->yourname,
            'email' => $req->email,
            'phone' => $req->phone,
            'subject' => $req->subject,
            'message' => $req->message,
        ]);
        session()->flash('msg', __('site.your_message_sent'));
        return redirect('/contactus');

    }
}

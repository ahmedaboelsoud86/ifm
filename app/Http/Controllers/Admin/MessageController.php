<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class MessageController extends Controller
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
        $contacts = Contact::latest()->get();
        return view('admin.contacts.list', compact('contacts'));
    }// end of index
    public function destroy(Contact $contact)
    {
        $contact->delete();
        session()->flash('msg', __('site.deleted_successfully'));
        return redirect('admin/contacts');

    }

    public function show(Contact $message)
    {
        return view('admin.contacts.show', compact('message'));
    }


}//end of contro

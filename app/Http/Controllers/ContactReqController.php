<?php

namespace App\Http\Controllers;
use App\Models\ContactRequest;
use Session ;

use Illuminate\Http\Request;

class ContactReqController extends Controller
{
    public function contact_req(Request $request)
    {

     $request->validate([

            'email' => 'required|email',

        ]);

        $contact = new ContactRequest();
        $contact->name = $request->name;
        $contact->email  = $request->email;
        $contact->value = $request->value;
        $contact->phone = $request->phone;
        $contact->save();
        Session::flash('message', 'Your request has been submitted successfully');
        return redirect()->route('blogs');
    }
}

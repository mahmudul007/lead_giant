<?php

namespace App\Http\Controllers;
use App\Models\ContactRequest;

use Illuminate\Http\Request;

class ContactReqController extends Controller
{
    public function contact_req(Request $request)
    {
        $request->validate([
            'type' => 'required',
           
        ]);
        // 'type',
        // 'value',
        // 'is_contacted',
        // 'ref_id',
        $contact = new ContactRequest();
        $contact->type = $request->type;
        $contact->ref_id = $request->ref_id;

        $temp = new \stdClass();
        $temp->cleaning_service = $request->cleaning_service;
        $temp->location = $request->location;
        $temp->clean_date = $request->clean_date;
        $temp->cleaning_area_sq_ft = $request->cleaning_area_sq_ft;

        $temp->contact_no = $request->contact_no;
        $temp->email = $request->email;

        $temp->property_requester_name = $request->property_requester_name;
        $temp->property_description_msg = $request->property_description_msg;

        $temp->normal_contact_msg = $request->normal_contact_msg;
        $temp->normal_contact_name = $request->normal_contact_name;
        $temp->normal_contact_subject = $request->normal_contact_subject;

        $contact->value = json_encode($temp);
        // dd($contact);

        $contact->save();
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ContactRequest;
use App\Models\Blog;
use App\Models\Brand;
use Illuminate\Support\Facades\Gate;

class ContactReqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Gate::allows('blog_access')) {
            return abort(401);
        }
       
        $message =  ContactRequest::orderBy('created_at', 'desc')->paginate(10);
        return view('backend.contacts.index', compact( 'message'));
    }
    public function show($id)
    {
        if (!Gate::allows('blog_access')) {
            return abort(401);
        }
        $contact_req = ContactRequest::findOrfail($id);
        if ($contact_req->type == 1) {
            $data = Blog::where('id', $contact_req->ref_id)->get()->first();
            return view('backend.contacts.show', compact('contact_req', 'data'));
        } elseif (($contact_req->type == 2) && (!is_null($contact_req->ref_id))) {

            $data = Brand::where('id', $contact_req->ref_id)->get()->first();
            return view('backend.contacts.show', compact('contact_req', 'data'));
        }
        return view('backend.contacts.show', compact('contact_req'));

    }
    public function complete($id)
    {
        if (!Gate::allows('blog_edit')) {
            return abort(401);
        }

        $data = ContactRequest::findOrFail($id);
        if ($data->is_contacted == 1) {
            $data->is_contacted = 0;
        } else {
            $data->is_contacted = 1;
        }
        $data->save();

        return back();
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Image;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use File;
use Illuminate\Support\Facades\Session;


class BrandsController extends Controller
{
    public function index()
    {
        if (!Gate::allows('brand_access')) {
            return abort(401);
        }
        $services = Brand::orderby('created_at', 'desc')->get() ->all();

        return view('backend.services.index', compact('services'));
    }
    public function create()
    {
        if (!Gate::allows('brand_create')) {
            return abort(401);
        }
        return view('backend.services.create');
    }

    public function store(Request $request)
    {
        if (!Gate::allows('brand_create')) {
            return abort(401);
        }



        $request->validate([
            'link' => 'image|required',
            'name' => 'required',
        ]);

        $service = new Brand();
        $service->name = $request->name;
 
        $service->save();

        $serv = new Image();
        $serv->tag = 'brand';
        $serv->table = 'brands';
        $serv->ref_id = $service->id;
        

        if ($request->hasfile('link')) {
            $file = $request->file('link');
            $filename = time() . $file->getClientOriginalName();
            $file->move('frontend/image/', $filename);
            $serv->link = '/frontend/image/' . $filename;
        }
       
        $serv->save();

        return redirect()->route('admin.services.index');
    }
    public function update(Request $request, $id)
    {
        $service = Brand::findOrFail($id);

        $service->name = $request->name;
   
        $image = Image::where([['ref_id', $id], ['tag', 'service'],['table', 'services'] ])
        ->get()
        ->first();

        $image->tag = 'brand';
        $image->table = 'brands';
        $image->ref_id = $id;

        if ($request->file('link') != null) {
            $destination = public_path($image->link);

            if (file_exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('link');
            $filename = time() . $file->getClientOriginalName();
            $file->move('frontend/image/', $filename);
            $image->link = '/frontend/image/' . $filename;
        }
        $image->save();



        $service->save();

        return redirect()
            ->route('admin.services.index')
         ;
    }
    public function show($id)
    {
       
       
        $service = Brand::findOrFail($id);
    
        return view('backend.services.show', compact('service'));
    }

    public function destroy($id)
    {
        
       
        $service = Brand::findOrFail($id);
        $image = Image::where([['ref_id', $id], ['table', 'services'], ['tag', 'service']])
            ->get()
            ->first();
        if ($image != null) {
            $destination = public_path($image->link);

            if (file_exists($destination)) {
                File::delete($destination);
            }
            $image->delete();
        }

        $service->delete();

        return redirect()
            ->route('admin.services.index')
            ->withFlashSuccess('Services deleted succesfully');
    }
    public function edit($id)
    {
       

        $service = Brand::findOrFail($id);

        return view('backend.services.edit', compact('service'));
    }

    public function publish($id)
    {
        

        $service = Brand::findOrFail($id);
        if ($service->published == 1) {
            $service->published = 0;
        } else {
            $service->published = 1;
        }
        $service->save();

        return back()->withFlashSuccess('published');
    }


}

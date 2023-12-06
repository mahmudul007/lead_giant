<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Image;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use File;

class BlogsController extends Controller   
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $properties = BLog::orderby('created_at', 'desc')->get()->all();
        return view('backend.properties.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     

        return view('backend.properties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
      

        $request->validate([
            'images' => 'required|array',
            'images.*' => 'required|image',
            'title' => 'required',
            'category' => 'required',
        ]);

        $property = new BLog();
        $property->title = $request->title;
        $property->category = $request->category;
        
        $property->blogtext = $request->blogtext;
       
        $property->published = $request->published == 1 ? 1 : 0;
        $property->featured = $request->featured == 1 ? 1 : 0;
     
        

        $property->meta_title = $request->meta_title;
        $property->meta_description = $request->meta_description;
        $property->meta_keywords = $request->meta_keywords;
        $property->slug = Str::slug($request->title);
        
        $property->save();

        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {
                $serv = new Image();
                $serv->tag = 'blog';
                $serv->table = 'blogs';
                $serv->ref_id = $property->id;

                $filename = time() . $image->getClientOriginalName();
                $image->move('frontend/image/', $filename);
                $serv->link = '/frontend/image/' . $filename;
                $serv->save();
            }
        }

        session()->flash('success', 'Data has been successfully stored.');


        return redirect()->route('admin.properties.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = BLog::findOrfail($id);
        return view('backend.properties.show', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // if (!Gate::allows('property_edit')) {
        //     return abort(401);
        // }
        $property = BLog::findOrfail($id);
        return view('backend.properties.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // if (!Gate::allows('property_edit')) {
        //     return abort(401);
        // }

        $property = BLog::findOrFail($id);
        $property->title = $request->title;
        $property->category = $request->category;
        $property->blogtext = $request->blogtext;

        // dd($property);
        $property->save();
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {
                $serv = new Image();
                $serv->tag = 'blog';
                $serv->table = 'blogs';
                $serv->ref_id = $property->id;

                $filename = time() . $image->getClientOriginalName();
                $image->move('frontend/image/', $filename);
                $serv->link = '/frontend/image/' . $filename;
                $serv->save();
            }
        }
        session()->flash('success', 'Data has been successfully updated.');

        return redirect()->route('admin.properties.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // if (!Gate::allows('property_delete')) {
        //     return abort(401);
        // }
        $variable = Blog::findOrFail($id);
        $images = Image::where([['ref_id', $id], ['table', 'properties'], ['tag', 'property']])
            ->get()
            ->all();
        if ($images != null) {
            foreach ($images as $image) {
                $destination = public_path($image->link);

                if (file_exists($destination)) {
                    File::delete($destination);
                }
                $image->delete();
            }
        }
        $variable->delete();
        session()->flash('success', 'Data has been successfully deleted');


        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function publish($id)
    {
        
        $property = Blog::findOrFail($id);
        if ($property->published == 1) {
            $property->published = 0;
        } else {
            $property->published = 1;
        }
        $property->save();
        session()->flash('success', 'Data has been successfully published');


        return back()->withFlashSuccess('published');
    }

    public function singleImageDelete($id)
    {
        

        $image = Image::where([['id', $id], ['table', 'properties'], ['tag', 'property']])
            ->get()
            ->first();

        if ($image != null) {
            $destination = public_path($image->link);

            if (file_exists($destination)) {
                File::delete($destination);
            }
            $image->delete();
        }
        session()->flash('success', 'Image has been successfully deleted');

        return redirect()->back();
    }
}

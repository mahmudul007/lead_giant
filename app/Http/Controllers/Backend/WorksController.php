<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\Image;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use File;
use Illuminate\Support\Facades\Session;

class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $works = Work::orderby('created_at', 'desc')->get()->all();
        return view('backend.works.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     

        return view('backend.works.create');
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

        $work = new Work();
        $work->title = $request->title;
        $work->category = $request->category;
        $work->slug = Str::slug($request->title);    
        $work->save();

        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {
                $serv = new Image();
                $serv->tag = 'blog';
                $serv->table = 'works';
                $serv->ref_id = $work->id;

                $filename = time() . $image->getClientOriginalName();
                $image->move('frontend/image/', $filename);
                $serv->link = '/frontend/image/' . $filename;
                $serv->save();
            }
        }

        session()->flash('success', 'Data has been successfully stored.');


        return redirect()->route('admin.works.index');
    }

   
    public function show($id)
    {
        $work = Work::findOrfail($id);
        return view('backend.works.show', compact('work'));
    }

 
    public function edit($id)
    {
       
        $work = Work::findOrfail($id);
        return view('backend.works.edit', compact('work'));
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
        

        $work = Work::findOrFail($id);
        $work->title = $request->title;
        $work->category = $request->category;
  

        // dd($work);
        $work->save();
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {
                $serv = new Image();
                $serv->tag = 'work';
                $serv->table = 'works';
                $serv->ref_id = $work->id;

                $filename = time() . $image->getClientOriginalName();
                $image->move('frontend/image/', $filename);
                $serv->link = '/frontend/image/' . $filename;
                $serv->save();
            }
        }
        session()->flash('success', 'Data has been successfully updated.');

        return redirect()->route('admin.works.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       
        $variable = Blog::findOrFail($id);
        $images = Image::where([['ref_id', $id], ['table', 'works'], ['tag', 'work']])
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
  

    public function singleImageDelete($id)
    {
        

        $image = Image::where([['id', $id], ['table', 'works'], ['tag', 'work']])
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

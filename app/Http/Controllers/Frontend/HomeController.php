<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Work;

class HomeController extends Controller
{
    public function index()
    {
        $blogs=Blog::orderBy('id', 'DESC') ->where('published',1)->paginate(9);
        $brands=Brand::orderBy('id', 'DESC') ->where('published',1)->get()->all();
        $works=Work::orderBy('id', 'DESC')->paginate(9);

        return view('frontend.index',compact('blogs','brands','works'));
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function about(){
        return view('frontend.about');
    }
}

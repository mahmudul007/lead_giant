<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class HomeController extends Controller
{
    public function index()
    {
        $blogs=Blog::orderBy('id', 'DESC') ->where('published',1)->paginate(9);
        $brands=Brand::orderBy('id', 'DESC') ->where('published',1)->get()->all();

        return view('frontend.index',compact('blogs','brands'));
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function about(){
        return view('frontend.about');
    }
}

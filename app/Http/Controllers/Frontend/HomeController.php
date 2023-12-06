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
        $property=Blog::orderBy('id', 'DESC') ->where('published',1)->paginate(9);
        $service=Brand::orderBy('id', 'DESC') ->where('published',1)->paginate(9);

        return view('frontend.index',compact('property','service'));
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function about(){
        return view('frontend.about');
    }
}

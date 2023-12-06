<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Property;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $property=Property::orderBy('id', 'DESC') ->where('published',1)->paginate(9);
        $service=Service::orderBy('id', 'DESC') ->where('published',1)->paginate(9);

        return view('frontend.index',compact('property','service'));
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function about(){
        return view('frontend.about');
    }
}

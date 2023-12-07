<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $path;

    public function __construct()
    {
        $path = 'frontend';
        $this->path = $path;
    }
    public function show($property_slug)
    {

        $Blog = Blog::where('slug', $property_slug)->firstOrFail();
        $blogs = Blog::   orderby('created_at', 'desc') ->where('published',1)->get()->all();

        return view($this->path . '.blogs.property', compact('property','blogs'));
    }
    public function index()
    {

         $blogs = Blog::   orderby('created_at', 'desc') ->where('published',1)->get()->all();

        return view($this->path . '.blogs.index', compact('blogs'));
    }

}
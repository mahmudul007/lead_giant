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
        
        

        $blog = Blog::where('slug', $property_slug)->firstOrFail();
        $blogs = Blog:: whereNotIn('id',[ $blog->id])-> orderby('created_at', 'desc') ->where('published',1)
        ->take(4)
        ->get();;
       

        return view($this->path . '.blogs.blog', compact('blog','blogs'));
    }
    public function index()
    {

         $blogs = Blog::   orderby('created_at', 'desc') ->where('published',1)->paginate(12);

        return view($this->path . '.blogs.index', compact('blogs'));
    }
  

}

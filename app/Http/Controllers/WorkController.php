<?php

namespace App\Http\Controllers;
use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    private $path;

    public function __construct()
    {
        $path = 'frontend';
        $this->path = $path;
    }
  
    public function index()
    {

         $works = Work::orderby('created_at', 'desc')->paginate(12);

        return view($this->path . '.works.index', compact('works'));
    }
  

}

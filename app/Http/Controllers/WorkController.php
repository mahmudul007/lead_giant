<?php

namespace App\Http\Controllers;

use App\Models\Work;

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

    public function show($id)
    {
        $work = Work::findOrFail($id);
        $works = Work::whereNotIn('id', [$work->id])->orderby('created_at', 'desc')->take(4)->get();

        return view($this->path . '.works.work', compact('work', 'works'));
    }

}

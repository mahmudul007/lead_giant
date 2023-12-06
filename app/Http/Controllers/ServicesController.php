<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function __construct()
    {
        $path = 'frontend';
        $this->path = $path;
    }
    public function show($service_slug)
    {

        $service = Service::
          where('slug', $service_slug)

            ->firstOrFail();

         $services = Service::orderby('created_at', 'desc') ->where('published',1)->paginate(7);

        return view($this->path . '.cleaning.cleaning_service', compact('service','services'));
    }
    public function index()
    {

         $services = Service::   orderby('created_at', 'desc') ->where('published',1)->get()->all();

        return view($this->path . '.cleaning.index', compact('services'));
    }

}

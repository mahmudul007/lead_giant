<?php

namespace App\Http\Controllers;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    private $path;

    public function __construct()
    {
        $path = 'frontend';
        $this->path = $path;
    }
    public function show($property_slug)
    {

        $property = Property::where('slug', $property_slug)->firstOrFail();
        $properties = Property::   orderby('created_at', 'desc') ->where('published',1)->get()->all();

        return view($this->path . '.properties.property', compact('property','properties'));
    }
    public function index()
    {

         $properties = Property::   orderby('created_at', 'desc') ->where('published',1)->get()->all();

        return view($this->path . '.properties.index', compact('properties'));
    }

}
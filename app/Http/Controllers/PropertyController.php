<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    public function index()
    {   
        $properties = DB::select ("select * from laradev.properties");

        return view('property/index')->with('properties', $properties);
    }

    public function create()
    {
        return view('property/create');
    }

    public function store(Request $request)
    {   

        $propertySlug = $this->setName($request->title);

        $property = [
            $request->title,
            $propertySlug,
            $request->description,
            $request->rental_price,
            $request->sale_price
        ];

        DB::insert("INSERT INTO laradev.properties (title, name, description, rental_price, sale_price) values (?, ?, ?, ?, ?)", $property);
        
        return redirect()->action("PropertyController@index");
    }

    public function edit($name)
    {
        $property = DB::select("SELECT * FROM laradev.properties WHERE name =?", [$name]);
        
        if(!empty($property)){

            return view('property/edit')->with('property', $property);

        }else{
            return redirect()->action('PropertyController@index');
        }
    }

    public function update($name)
    {
        
    }

    public function setName($title)
    {
        $propertySlug = str_slug($title);

        $properties = DB::select ("select * from laradev.properties");

        $t = 0;
        foreach($properties as $property){
            if(str_slug($property->title) == $propertySlug){
                $t++;
            }
        }
        if($t > 0)
            {
                $propertySlug = $propertySlug . '-' . $t;
            }
        return $propertySlug;
    }

    public function show($name)
    {
        $property = DB::select("SELECT * FROM laradev.properties WHERE name =?", [$name]);
        
        if(!empty($property)){

            return view('property/show')->with('property', $property);

        }else{
            return redirect()->action('PropertyController@index');
        }
    }
}

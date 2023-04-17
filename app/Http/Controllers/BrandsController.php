<?php

namespace App\Http\Controllers;

use App\Models\brands;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['brands'] = brands::paginate(5);
        return view("brands.index", $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("brands.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Codigo para traer toda la informacon de la base de datos
        //$brandInfo = request()->all();

        //Extrayendo todos los datos exeptuando el token
        $brandInfo = request()->except('_token');
        brands::insert($brandInfo);
        //return response()->json($brandInfo);
        return redirect('brands');
    }

    /**
     * Display the specified resource.
     */
    public function show(brands $brands)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($brand_id)
    {
        $brand=brands::findOrFail($brand_id);
        return view('brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $brand_id)
    {
        $brandInfo = request()->except(['_token','_method']);
        brands::where('id','=',$brand_id)->update($brandInfo);
        
        $brand=brands::findOrFail($brand_id);
        return view('brands.edit', compact('brand'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($brand_id)
    {
        brands::destroy($brand_id);
        return redirect('brands');
    }
}

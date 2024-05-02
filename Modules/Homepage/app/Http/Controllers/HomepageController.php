<?php

namespace Modules\Homepage\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Product\Models\Product;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $sports = Product::where('body_type', 'sport')->get();
        $streets = Product::where('body_type', 'street')->get();
        $cruisers = Product::where('body_type', 'cruiser')->get();
        return view('homepage::index' , compact('products' , 'sports' , 'streets' , 'cruisers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('homepage::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('homepage::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('homepage::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}

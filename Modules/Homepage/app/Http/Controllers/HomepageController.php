<?php

namespace Modules\Homepage\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Product\Models\Brand;
use Modules\Product\Models\Product;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all()->where('rating', '5');
        $sports = Product::where('body_type', 'sport')
                            ->whereIn('rating',[3,4,5])
                            ->get();
        $streets = Product::where('body_type', 'street')
                            ->whereIn('rating',[3,4,5])
                            ->get();
        $cruisers = Product::where('body_type', 'cruiser')
                            ->whereIn('rating',[3,4,5]) 
                            ->get();
        $brands = Brand::all();
        return view('homepage::index' , compact('products' , 'sports' , 'streets' , 'cruisers', 'brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('homepage::create');
    }

    public function addToCart($id)
    {
        if(auth()->user()){
            $data = [
                'user_id' => auth()->user()->id,
                'product_id' => $id,
            ];
            \Modules\Cart\Models\Cart::updateOrCreate($data);
            session()->flash('message', 'Product added to cart successfully');
        }
        else{
            return redirect()->route('login');
        }
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

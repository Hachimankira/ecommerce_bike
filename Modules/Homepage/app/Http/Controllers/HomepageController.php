<?php

namespace Modules\Homepage\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Cart\Models\Cart;
use Modules\Homepage\Models\Contact;
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

        // product already in cart
        $productsInCart = Cart::where('user_id', auth()->id())->pluck('product_id');

        return view('homepage::index' , compact('products' , 'sports' , 'streets' , 'cruisers', 'brands' , 'productsInCart'));
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

    public function contact()
    {
        return view('homepage::contact');
    }

    public function storeContact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Contact::create($request->all());
        return redirect()->route('home.index');
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
    public function show($brandId)
{
    // Retrieve a single brand by ID
    $brand = Brand::with('products')->find($brandId);
    // Check if the brand was found
    if (!$brand) {
        // Handle the case where the brand is not found
        abort(404);  // Or return a specific view or response
    }

    // Return the show view with the brand data
    return view('homepage::show', compact('brand'));
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

<?php

namespace Modules\Cart\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Cart\Models\Cart;
use Modules\Cart\Models\Wishlist;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartItems = Cart::where('user_id', auth()->user()->id)->get();
        $cartItemIds = $cartItems->pluck('product_id')->toArray();
        return view('cart::index' , compact('cartItems' , 'cartItemIds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cart::create');
    }

    public function success()
    {
        return view('cart::success');
    }

    public function cancel()
    {
        return view('cart::cancel');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $item = new Cart();
        $item->user_id = auth()->user()->id;
        $item->product_id = $request->product_id;
        $item->save();
        return redirect()->route('cart.index')->with('success', 'Product added to cart successfully');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('cart::success');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('cart::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Cart::destroy($id);
        return redirect()->route('cart.index')->with('success', 'Product removed from cart successfully');
    }
    public function wishlist()
    {
        $wishlists = Wishlist::where('user_id', auth()->user()->id)->get();
        return view('cart::wishlist' , compact('wishlists'));
    }

    public function addToWishlist($id)
    {
        $item = new Wishlist();
        $item->user_id = auth()->user()->id;
        $item->product_id = $id;
        $item->save();
        return back()->with('success', 'Product added to wishlist successfully');
    }
}

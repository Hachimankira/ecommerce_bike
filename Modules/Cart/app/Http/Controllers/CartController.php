<?php

namespace Modules\Cart\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Cart\Models\Cart;
use Modules\Cart\Models\Wishlist;
use Modules\Checkout\Models\Order;
use Modules\Product\Models\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartItems = Cart::where('user_id', auth()->user()->id)->get();
        $cartItemIds = $cartItems->pluck('product_id')->toArray();
        return view('cart::index', compact('cartItems', 'cartItemIds'));
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
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        // Find the product
        $product = Product::find($request->product_id);

        // Check if the product is in stock
        // if ($product->stock <= 0) {
        //     return redirect()->route('cart.index')->with('error', 'Product is out of stock');
        // }

        // Decrease the stock of the product
        // $product->stock--;
        // $product->save();

        $item = new Cart();
        $item->user_id = auth()->user()->id;
        $item->product_id = $request->product_id;
        $item->save();
        return back()->with('success', 'Product added to cart successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the cart item
        $cartItem = Cart::find($id);

        // Increase the stock of the associated product
        $product = Product::find($cartItem->product_id);
        $product->stock++;
        $product->save();

        Cart::destroy($id);
        return redirect()->route('cart.index')->with('success', 'Product removed from cart successfully');
    }
    public function wishlist()
    {
        $wishlists = Wishlist::where('user_id', auth()->user()->id)->get();
        // dd($wishlists);
        // product already in cart
        $productsInCart = Cart::where('user_id', auth()->id())->pluck('product_id');
        return view('cart::wishlist', compact('wishlists', 'productsInCart'));
    }

    public function addToWishlist($id)
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        $item = new Wishlist();
        $item->user_id = auth()->user()->id;
        $item->product_id = $id;
        $item->save();
        return back()->with('success', 'Product added to wishlist successfully');
    }
    public function removeFromWishlist($productId)
    {
        $userId = auth()->user()->id;
        $wishlist = Wishlist::where('user_id', $userId)->where('product_id', $productId)->first();
        if ($wishlist) {
            $wishlist->delete();
            return back()->with('success', 'Product removed from wishlist successfully');
        } else {
            return back()->with('error', 'Product not found in wishlist');
        }
    }
    public function order()
    {
        $orders = Order::where('user_id', auth()->user()->id)->get();
        return view('cart::order' , compact('orders'));
    }
}

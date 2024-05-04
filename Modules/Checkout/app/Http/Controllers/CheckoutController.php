<?php

namespace Modules\Checkout\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Modules\Cart\Models\Cart;
use Illuminate\Support\Facades\Session;
use Modules\Checkout\Models\Order;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartItems = Cart::where('user_id', auth()->user()->id)->get();
        return view('checkout::index' , compact('cartItems'));
    }

    public function store()
    {
        $item = new Order();
        $item->first_name = request('first_name');
        $item->last_name = request('last_name');
        $item->email = request('email');
        $item->phone = request('phone');
        $item->address = request('address');
        $item->city = request('city');
        $item->status = 'pending';
        $item->total = request('total');
        $item->save();

        return redirect()->route('home.index')->with('success', 'Order has been placed successfully');
    }
    // public function payment()
    // {
    //     $total = 0;
    //     $cartItems = Cart::where('user_id', auth()->user()->id)->get();
    //     foreach ($cartItems as $cartItem) {
    //         $total += $cartItem->product->price * $cartItem->quantity;
    //     }
    //     return view('checkout::payment' , compact('total'));
    // }
    public function show()
    {
        $total = 600;
        
        return view('checkout::checkout' , compact('total'));
    }

    // public function store()
    // {
    //     $cartItems = Cart::where('user_id', auth()->user()->id)->get();
    //     $total = 0;
    //     foreach ($cartItems as $cartItem) {
    //         $total += $cartItem->product->price * $cartItem->quantity;
    //     }
    //     $order = auth()->user()->orders()->create([
    //         'first_name' => request('first_name'),
    //         'last_name' => request('last_name'),
    //         'email' => request('email'),
    //         'phone' => request('phone'),
    //         'address' => request('address'),
    //         'city' => request('city'),
    //         'total' => $total,
    //     ]);
    //     foreach ($cartItems as $cartItem) {
    //         $order->products()->attach($cartItem->product_id, [
    //             'quantity' => $cartItem->quantity,
    //             'price' => $cartItem->product->price,
    //         ]);
    //         $cartItem->delete();
    //     }
    //     Session::flash('success', 'Order has been placed successfully');
    //     return redirect()->route('home');
    // }
    
}

<?php

namespace Modules\Checkout\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Modules\Cart\Models\Cart;
use Illuminate\Support\Facades\Session;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $cartItems = Cart::where('user_id', auth()->user()->id)->get();
    //     return view('checkout::index' , compact('cartItems'));
    // }
    
}

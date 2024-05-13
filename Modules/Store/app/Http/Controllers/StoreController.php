<?php

namespace Modules\Store\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Cart\Models\Cart;
use Modules\Product\Models\Product;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $products = Product::where('status','approved')->paginate(9);
    //     // product already in cart
    //     $productsInCart = Cart::where('user_id', auth()->id())->pluck('product_id');
    //     return view('store::index' , compact('products' , 'productsInCart'));
    // }


    public function index(Request $request)
    {
        $sort = $request->query('sort');
        $engine = $request->query('engine');
        $owner = $request->query('owner');

        $query = Product::query();

        if ($sort === 'popularity') {
            $query->orderBy('rating', 'desc');
        } elseif ($sort === 'price_asc') {
            $query->orderBy('price');
        }elseif ($sort === 'latest') {
            $query->orderBy('created_at' , 'desc');
        } elseif ($sort === 'price_desc') {
            $query->orderBy('price', 'desc');
        }

        //engine power
        if ($engine === 'upto_150cc') {
            $query->where('engine', '<=', 150);
        } elseif ($engine === '150_to_250cc') {
            $query->whereBetween('engine', [150, 250]);
        } elseif ($engine === '250cc_and_above') {
            $query->where('engine', '>=', 250);
        }
        //owner
        if ($owner === 'first') {
            $query->where('owner', 'first');
        } elseif ($owner === 'second') {
            $query->where('owner', 'second' );
        } elseif ($owner === 'third') {
            $query->where('owner', 'third');
        }

        $products = $query->paginate(9);

        return view('store::index', compact('products'));
    }

}

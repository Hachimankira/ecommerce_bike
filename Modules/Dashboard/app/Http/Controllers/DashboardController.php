<?php

namespace Modules\Dashboard\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Checkout\Models\Order;
use Modules\Product\Models\Product;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('brand')->paginate(10);
        return view('dashboard::index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard::create');
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
        return view('dashboard::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('dashboard::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }

    public function changeStatus($id, $status)
    {
        $product = Product::find($id);

        if ($product) {
            $product->status = $status;
            $product->save();

            return redirect('/admin_dashboard')->with('success', 'Status changed successfully.');
        } else {
            return redirect('/admin_dashboard')->with('error', 'National ID Card not found.');
        }
    }
    public function changeRating($id, $rating)
    {
        $product = Product::find($id);

        if ($product) {
            $product->rating = $rating;
            $product->save();

            return redirect('/admin_dashboard')->with('success', 'rating changed successfully.');
        } else {
            return redirect('/admin_dashboard')->with('error', 'National ID Card not found.');
        }
    }


    public function orderStatus($id, $status, $productId)
    {
        $order = Order::find($id);
        // Update the product status
        $product = Product::find($productId);
        $product->stock = 0;
        $product->save();

        if ($order) {
            $order->status = $status;
            $order->save();

            return redirect()->back()->with('success', 'Status changed successfully.');
        } else {
            return redirect()->back()->with('error', 'National ID Card not found.');
        }
    }

    public function customerList()
    {
        $orders = Order::with('user', 'products.brand')->paginate(9);
        return view('dashboard::customer_list', compact('orders'));
    }

    public function billingInfo()
    {
        $orders = Order::with('user', 'products.brand')->paginate(9);
        return view('dashboard::billing', compact('orders'));
    }

    public function orderList()
    {
        $orders = Order::with('user', 'products.brand')->paginate(9);
        return view('dashboard::order_list', compact('orders'));
    }
}

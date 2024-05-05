<?php

namespace Modules\Dashboard\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Product\Models\Product;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();        
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
}

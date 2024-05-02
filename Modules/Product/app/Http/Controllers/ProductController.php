<?php

namespace Modules\Product\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Product\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('product::index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product::add');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request , $file): RedirectResponse
    {
        if ($request->hasFile('banner_img')) {
            $bannerImageName = time() . '_banner.' . $file('banner_img')->getClientOriginalExtension();
            $file('banner_img')->storeAs('public/images/', $bannerImageName);
            $request['banner_img'] = 'public/images/' . $bannerImageName;
        }

        if ($request->hasFile('other_img')) {
            $otherImages = $request->file('other_img');
            $otherImageNames = [];
            foreach ($otherImages as $image) {
                $imageName = time() . '_other.' . $image->getClientOriginalExtension();
                $image->storeAs('public/images/', $imageName);
                $otherImageNames[] = 'storage/images/' . $imageName;
            }
            $request['other_img'] = json_encode($otherImageNames); // Store paths as JSON
        }

        $product = Product::create($request->all());

        return redirect()->route('product.index')
            ->with('success', 'Product added successfully.');
    }


    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('product::show' , compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('product::edit');
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
        //
    }
}

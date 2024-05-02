<?php

namespace Modules\Product\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Product\Models\Product;
use Symfony\Component\Console\Input\Input;

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
        $input = $request->all(); // Get all input data

        // Handling the banner image upload
        if ($request->hasFile('banner_img')) {
            $bannerImageFile = $request->file('banner_img');
            $bannerImageName = uniqid() . '_banner.' . $bannerImageFile->getClientOriginalExtension();
            $bannerImageFile->storeAs('public/images', $bannerImageName);
            $input['banner_img'] = 'storage/images/' . $bannerImageName; // Modify the input array
        }

        // Handling other images upload
        if ($request->hasFile('other_img')) {
            $otherImages = $request->file('other_img');
            $otherImageNames = [];
            foreach ($otherImages as $image) {
                if ($image->isValid()) {
                    $imageName = uniqid() . '_other.' . $image->getClientOriginalExtension();
                    $image->storeAs('public/otherimages', $imageName);
                    $otherImageNames[] = 'storage/otherimages/' . $imageName;
                }
            }
            $input['other_img'] = json_encode($otherImageNames); // Storing JSON encoded array of image paths
        }
       
        // Create product using the modified input array
        $product = Product::create($input);

        return redirect()->route('product.index')
            ->with('success', 'Product added successfully.');
    }




    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('product::show', compact('product'));
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

<?php

namespace Modules\Product\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Product\Models\BikeModels;
use Modules\Product\Models\Brand;
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
        // $brands = Brand::all();
        $brands = Brand::all();
        // $models = BikeModels::all();
        return view('product::add', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request): RedirectResponse
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

        return redirect()->route('home.index')
            ->with('success', 'Product added successfully.');
    }




    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        $product = Product::find($id);
        $relatedProducts = Product::where('brand_id', $product->brand_id)
            ->orWhere('type', $product->type)
            ->orWhere('body_type', $product->body_type)
            ->where('id', '!=', $id)
            ->get();
        return view('product::show', compact('product' , 'relatedProducts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $brands = Brand::all();
        // $models = BikeModels::all();
        return view('product::edit', compact('product', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {

        $input = $request->all(); // Get all input data
        $product = Product::findOrFail($id); // Retrieve the product by ID or fail

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

        // Update the product using the modified input array
        $product->update($input);

        return redirect()->route('product.index')
            ->with('success', 'Product updated successfully.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
    public function getModelsByBrand($brandId)
    {
        // Fetch the brand with related bike models
        $brand = Brand::with('models')->find($brandId);

        if ($brand) {
            return response()->json($brand->models);
        } else {
            return response()->json([]);
        }
    }
}

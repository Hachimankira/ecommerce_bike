<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Modules\Product\Models\Brand;
use Modules\Product\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = File::get(('info.json'));
        $products = json_decode($data, true);

      

    foreach ($products as $product) {
        $brand = Brand::firstOrCreate(
            [
                'name' => $product['BikeDetails']['Brand']
            ],
            [
                'image' => "/img/icon/" . strtolower($product['BikeDetails']['Brand']) . ".png"
            ]
        );
        $brandId = $brand->exists ? $brand->id : null;
        Product::create([
            'brand_id' => $brandId,
            'model' => $product['BikeDetails']['Model'],
            'year' => $product['BikeDetails']['Year'],
            'type' => $product['BikeDetails']['Type'],
            'body_type' => $product['BikeDetails']['BodyType'],
            'distance' => $product['BikeDetails']['DistanceCovered'],
            'condition' => $product['BikeDetails']['Condition'],
            'owner' => $product['BikeDetails']['Owner'],
            'engine' => $product['BikeDetails']['Engine'],
            'battery' => $product['BikeDetails']['Battery'],
            'fuel_capacity' => $product['BikeDetails']['FuelCapaity'],
            'mileage' => $product['BikeDetails']['Milage'],
            'gear' => $product['AdditionalFeatures']['Gears'],
            'top_speed' => $product['BikeDetails']['TopSpeed'],
            // '' => 'first',
            'break' => $product['AdditionalFeatures']['BrakeType'],
            'suspension' => $product['AdditionalFeatures']['SuspensionType'],
            'price' => $product['Price']['AskingPrice'],
            'colour' => $product['BikeDetails']['Colour'],
            'negotiable' => 'no',
            'address' => "Kathmandu",
            'deliveryOption' => 'Home Delivery',
            'banner_img' => '/img/cover.jpg',
            // 'other_img' => '/img/bike.webp',
            'description' => $product['Description'],
            // Add other fields as necessary...
        ]);
    }
}
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
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
        Product::create([
            'brand' => $product['BikeDetails']['Brand'],
            'model' => $product['BikeDetails']['Model'],
            'year' => $product['BikeDetails']['Year'],
            'type' => $product['BikeDetails']['Type'],
            'body_type' => $product['BikeDetails']['BodyType'],
            'distance' => $product['BikeDetails']['DistanceCovered'],
            'colour' => $product['BikeDetails']['Colour'],
            'condition' => $product['BikeDetails']['Condition'],
            'gear' => $product['AdditionalFeatures']['Gears'],
            'suspension' => $product['AdditionalFeatures']['SuspensionType'],
            'break' => $product['AdditionalFeatures']['BrakeType'],
            'owner' => 'first',
            'address' => $product['Location']['City'],
            'deliveryOption' => 'Home Delivery',
            'description' => $product['Description'],
            'price' => $product['Price']['AskingPrice'],
            'negotiable' => 'no',
            'banner_img' => '/img/cover.jpg',
            'other_img' => '/img/bike.jpg',
            // Add other fields as necessary...
        ]);
    }
}
}

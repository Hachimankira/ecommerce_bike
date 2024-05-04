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
            'condition' => $product['BikeDetails']['Condition'],
            'owner' => 'first',
            'engine' => 'first',
            'battery' => 'first',
            'fuel_capacity' => 'first',
            'mileage' => 'first',
            'gear' => $product['AdditionalFeatures']['Gears'],
            'top_speed' => 'first',
            // '' => 'first',
            'break' => $product['AdditionalFeatures']['BrakeType'],
            'suspension' => $product['AdditionalFeatures']['SuspensionType'],
            'price' => $product['Price']['AskingPrice'],
            'colour' => $product['BikeDetails']['Colour'],
            'negotiable' => 'no',
            'address' => $product['Location']['City'],
            'deliveryOption' => 'Home Delivery',
            'banner_img' => '/img/cover.jpg',
            'other_img' => '/img/bike.jpg',
            'description' => $product['Description'],
            // Add other fields as necessary...
        ]);
    }
}
}

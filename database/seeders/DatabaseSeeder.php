<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Product\Models\BikeModels;
use Modules\Product\Models\Brand;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            ProductSeeder::class,
            // other seeders...
        ]);
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => '12345678',
        ]);
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'a@a.com',
            'user_type' => 'admin', 
            'password' => '12345678',
        ]);
        
            // models images
        $brands = [
            ['name' => 'Bajaj', 'image' => '/img/icon/bajaj.png'],
            ['name' => 'KTM', 'image' => '/img/icon/ktm.png'],
            ['name' => 'Yamaha', 'image' => '/img/icon/yamaha.webp'],
            ['name' => 'TVS', 'image' => '/img/icon/tvs.png'],
            ['name' => 'Hero', 'image' => '/img/icon/hero.png'],
            ['name' => 'Honda', 'image' => '/img/icon/honda.png'],
            ['name' => 'Suzuki', 'image' => '/img/icon/suzuki.png'],
            ['name' => 'Royal Enfield', 'image' => '/img/icon/royal-enfield.png'],
            ['name' => 'Mahindra', 'image' => '/img/icon/mahindra.png'],
            ['name' => 'Harley Davidson', 'image' => '/img/icon/harley-davidson.png'],
            ['name' => 'BMW', 'image' => '/img/icon/bmw.png'],
            ['name' => 'Ducati', 'image' => '/img/icon/ducati.png'],
            ['name' => 'Triumph', 'image' => '/img/icon/triumph.png'],
            ['name' => 'Kawasaki', 'image' => '/img/icon/kawasaki.png'],
            ['name' => 'Benelli', 'image' => '/img/icon/benelli.png'],
            ['name' => 'Aprilia', 'image' => '/img/icon/aprilia.png'],
            ['name' => 'MV Agusta', 'image' => '/img/icon/mv-agusta.png'],
            ['name' => 'Indian', 'image' => '/img/icon/indian.png'],
            ['name' => 'Jawa', 'image' => '/img/icon/jawa.png'],
            ['name' => 'Husqvarna', 'image' => '/img/icon/husqvarna.png'],
            ['name' => 'Norton', 'image' => '/img/icon/norton.png'],
            ['name' => 'Moto Guzzi', 'image' => '/img/icon/moto-guzzi.png'],
            ['name' => 'Vespa', 'image' => '/img/icon/vespa.png'],
            ['name' => 'Piaggio', 'image' => '/img/icon/piaggio.png'],
            ['name' => 'Lambretta', 'image' => '/img/icon/lambretta.png'],
            ['name' => 'Ather', 'image' => '/img/icon/ather.png'],
            ['name' => 'Revolt', 'image' => '/img/icon/revolt.png'],
            ['name' => 'Okinawa', 'image' => '/img/icon/okinawa.png'],
            ['name' => 'Pulsar', 'image' => 'public/img/icon/Pulsar N250 Nepal.png'],

            // Add more as needed...
        ];
        foreach ($brands as $brand) {
            Brand::create($brand);
        }

        $models = [
            ['name' => 'Pulsar', 'brand_id' => '1'],
            ['name' => 'NS', 'brand_id' => '1'],
            ['name' => 'Aviator', 'brand_id' => '1'],
            ['name' => 'Duke', 'brand_id' => '2'],
            ['name' => 'RC', 'brand_id' => '2'],
            ['name' => 'Adventure', 'brand_id' => '2'],
            ['name' => 'YZF-R1', 'brand_id' => '3'],
            ['name' => 'FZS-F1', 'brand_id' => '3'],
            ['name' => 'MT-09', 'brand_id' => '3'],
            ['name' => 'clearadion', 'brand_id' => '4'],
            ['name' => 'Splendor Plus', 'brand_id' => '5'],
            ['name' => 'Passion Pro', 'brand_id' => '5'],
            ['name' => 'Xtreme 160R', 'brand_id' => '5'],
            ['name' => 'CB Shine', 'brand_id' => '6'],
            ['name' => 'Activa 6G', 'brand_id' => '6'],
            ['name' => 'Hornet 2.0', 'brand_id' => '6'],
        ];
        foreach ($models as $model) {
            BikeModels::create($model);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        $brands = [
            ['name' => 'Bajaj', 'image' => '/img/icon/bajaj.png'],
            ['name' => 'KTM', 'image' => '/img/icon/ktm.png'],
            ['name' => 'Yamaha', 'image' => '/img/icon/yamaha.png'],
            ['name' => 'TVS', 'image' => '/img/icon/tvs.png'],
            ['name' => 'Hero', 'image' => '/img/icon/hero.png'],
            ['name' => 'Honda', 'image' => '/img/icon/honda.png'],
            // ['name' => 'Suzuki', 'image' => '/img/icon/suzuki.png'],
            // ['name' => 'Royal Enfield', 'image' => '/img/icon/royal-enfield.png'],
            // ['name' => 'Mahindra', 'image' => '/img/icon/mahindra.png'],
            // ['name' => 'Harley Davidson', 'image' => '/img/icon/harley-davidson.png'],
            // ['name' => 'BMW', 'image' => '/img/icon/bmw.png'],
            // ['name' => 'Ducati', 'image' => '/img/icon/ducati.png'],
            // ['name' => 'Triumph', 'image' => '/img/icon/triumph.png'],
            // ['name' => 'Kawasaki', 'image' => '/img/icon/kawasaki.png'],
            // ['name' => 'Benelli', 'image' => '/img/icon/benelli.png'],
            // ['name' => 'Aprilia', 'image' => '/img/icon/aprilia.png'],
            // ['name' => 'MV Agusta', 'image' => '/img/icon/mv-agusta.png'],
            // ['name' => 'Indian', 'image' => '/img/icon/indian.png'],
            // ['name' => 'Jawa', 'image' => '/img/icon/jawa.png'],
            // ['name' => 'Husqvarna', 'image' => '/img/icon/husqvarna.png'],
            // ['name' => 'Norton', 'image' => '/img/icon/norton.png'],
            // ['name' => 'Moto Guzzi', 'image' => '/img/icon/moto-guzzi.png'],
            // ['name' => 'Vespa', 'image' => '/img/icon/vespa.png'],
            // ['name' => 'Piaggio', 'image' => '/img/icon/piaggio.png'],
            // ['name' => 'Lambretta', 'image' => '/img/icon/lambretta.png'],
            // ['name' => 'Ather', 'image' => '/img/icon/ather.png'],
            // ['name' => 'Revolt', 'image' => '/img/icon/revolt.png'],
            // ['name' => 'Okinawa', 'image' => '/img/icon/okinawa.png'],
            // Add more as needed...
        ];
        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}

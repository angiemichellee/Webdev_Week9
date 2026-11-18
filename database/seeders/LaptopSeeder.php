<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\DatabaseSeeder;
use App\Models\Laptop;

class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Laptop::create([
            'brand' => 'Asus',
            'model' => 'ASUS ROGA',
            'prosessor' => 'AMD Ryzen 9 59000HS',
            'ram' => 16
        ]);
    }
}

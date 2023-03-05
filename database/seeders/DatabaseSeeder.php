<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
use App\Models\Unit;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::create([
            'name' => 'PRINT',
            'prefix' => 'PR'
        ]);

        Category::create([
            'name' => 'ATK',
            'prefix' => 'AT'
        ]);

        Category::create([
            'name' => 'Ice Cream',
            'prefix' => 'IC'
        ]);

        Unit::create([
            'unit' => 'Pcs'
        ]);

        Unit::create([
            'unit' => 'Pkg'
        ]);

        Product::create([
            'category_id' => '2',
            'unit_id' => '1',
            'name' => 'Buku Sidu 38',
            'code' => 'AT001',
            'barcode' => '45654865498545',
            'quantity' => '5',
            'purchase_price' => '2600',
            'sale_price' => '3500',
            'markup' => '12',
        ]);

        Product::create([
            'category_id' => '2',
            'unit_id' => '1',
            'name' => 'HVS A4 Maxi',
            'code' => 'AT002',
            'barcode' => '78984654',
            'quantity' => '10',
            'purchase_price' => '45000',
            'sale_price' => '50000',
            'markup' => '13',
        ]);

        Product::create([
            'category_id' => '1',
            'unit_id' => '1',
            'name' => 'Print A4 HP',
            'code' => 'PR003',
            'barcode' => '5487954654',
            'quantity' => '599',
            'purchase_price' => '150',
            'sale_price' => '500',
            'markup' => '20',
        ]);

        Product::create([
            'category_id' => '3',
            'unit_id' => '1',
            'name' => 'Igloo Chocolate',
            'code' => 'IC004',
            'barcode' => '7895846546',
            'quantity' => '20',
            'purchase_price' => '2000',
            'sale_price' => '2500',
            'markup' => '5',
        ]);
    }
}

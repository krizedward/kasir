<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Product::create([
        'category_id' => '1',
        'name' => 'Nasi Goreng Jawa',
        'slug' => 'nasi-goreng-jawa',
        'price' => '15000',
      ]);

      Product::create([
        'category_id' => '1',
        'name' => 'Mie Goreng Jawa',
        'slug' => 'mie-goreng-jawa',
        'price' => '15000',
      ]);

      Product::create([
        'category_id' => '2',
        'name' => 'Es Teh',
        'slug' => 'es-teh',
        'price' => '5000',
      ]);

      Product::create([
        'category_id' => '2',
        'name' => 'Es Jeruk',
        'slug' => 'es-jeruk',
        'price' => '5000',
      ]);
    }
}

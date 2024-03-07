<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'paper_id' => 2,
                'merk' => 'Sidu',
                'harga' => 46000
            ],
            [
                'paper_id' => 2,
                'merk' => 'Eprint',
                'harga' => 45000
            ],
            [
                'paper_id' => 2,
                'merk' => 'ZAP',
                'harga' => 42000
            ],
            [
                'paper_id' => 3,
                'merk' => 'Sidu',
                'harga' => 50000
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}

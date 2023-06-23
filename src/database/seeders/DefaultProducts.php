<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class defaultProducts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Produto #1',
                'price' => 10.00,
            ],
            [
                'name' => 'Produto #2',
                'price' => 14.00,
            ],
            [
                'name' => 'Produto #3',
                'price' => 25.00,
            ],
            [
                'name' => 'Produto #4',
                'price' => 40.00,
            ]
        ];

        foreach ($products as $product) {
            Products::create($product);
        }
    }
}

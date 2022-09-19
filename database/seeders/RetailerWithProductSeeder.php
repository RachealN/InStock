<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Retailer;
use App\Models\Stock;
use App\Models\User;
use Illuminate\Database\Seeder;

class RetailerWithProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $switch = Product::create(['name' => 'Nintendo Switch']);
        $bestBuy = Retailer::create(['name' => 'Best Buy']);

        $bestBuy->addStock($switch, new Stock([
            'price' => 10000,
            'url' => 'https://foo.com',
            'sku' => '8880044',
            'in_stock' => true
        ]));

//        \App\Models\User::factory()
        User::factory()->create([
            'email' => 'racheal@gmail.com'
        ]);

    }
}

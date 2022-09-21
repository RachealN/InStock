<?php

namespace Tests\Feature;

use App\Models\Product;
use Database\Seeders\RetailerWithProductSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class TrackCommandTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function it_tracks_product_stock()
    {
        $this->seed(RetailerWithProductSeeder::class);

        $this->assertFalse(Product::first()->inStock());

        $this->mockClientRequest();

        $this->artisan('track');

        $this->assertTrue(Product::first()->inStock());
    }

}

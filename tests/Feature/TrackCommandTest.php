<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use App\Notifications\ImportantStockUpdate;
use Database\Seeders\RetailerWithProductSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;


class TrackCommandTest extends TestCase
{
    use RefreshDatabase;

    /**
     * setup the test environment.
     * @return void
     */

    protected function setUp(): void
    {
        parent::setUp();

        Notification::fake();
        $this->seed(RetailerWithProductSeeder::class);

    }

    /**
     * @test
     */
    public function it_tracks_product_stock()
    {
        $this->assertFalse(Product::first()->inStock());
        $this->mockClientRequest();
        $this->assertTrue(Product::first()->inStock());

    }

}

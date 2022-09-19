<?php
namespace Tests\Clients;

use App\Models\Stock;
use Database\Seeders\RetailerWithProductSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Clients\BestBuy;

class BestBuyTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_tracks_the_product()
    {
        $this->seed(RetailerWithProductSeeder::class);

        $stock = tap(Stock::first())->update([
            'sku' => '8880044',
            'url' => 'https://api.bestbuy.com/click/-/8880044/pdp'
        ]);

        try {
            (new BestBuy())->checkAvailability($stock);
        }catch (\Exception $e){
            $this->fail('Failed to track the BestBuy API properly.' . $e->getMessage());
        }
        $this->assertTrue(true);
    }

}

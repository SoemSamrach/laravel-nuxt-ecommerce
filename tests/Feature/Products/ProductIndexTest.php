<?php

namespace Tests\Feature\Products;

use App\Models\Product;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductIndexTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_it_shows_a_collection_of_products()
    {
        $product = factory(Product::class)->create();
        $this->json('GET', 'api/products')
            ->assertJsonFragment([
                'id' =>  $product->id
            ]);

    }
    public function test_it_has_paginated_data()
    {
        $this->json('GET', 'api/products')
            ->assertJsonStructure([
                'meta'
            ]);

    }
}
